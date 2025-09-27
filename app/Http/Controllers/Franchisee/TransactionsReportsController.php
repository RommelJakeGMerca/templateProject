<?php

namespace App\Http\Controllers\Franchisee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class TransactionsReportsController extends Controller
{
    public function index(Request $request)
    {
        $currentUser  = auth()->user();
        $userBranches = $this->getUserBranches($currentUser->id);
        $branches     = DB::table('branches')
                    ->whereIn('id', $userBranches)
                    ->select('id', 'name')
                    ->get();

        $statusMapping   = $this->getStatusMapping();
        $platformMapping = $this->getPlatformMapping();

        $transactionsReport = DB::table('bookings as b')
                    ->leftJoin('branches as br', 'br.id', '=', 'b.branch_id')
                    ->leftJoin('customers as c', 'c.id', '=', 'b.customer_id')
                    ->select(
                        'b.id as booking_id',
                        'br.id as branch_id',
                        'br.name as branch_name',
                        'c.id as customer_id',
                        'c.full_name as customer_name',
                        DB::raw("DATE_FORMAT(b.created_at, '%M %d, %Y') as date"),
                        DB::raw($this->getBookingStatusCaseStatement()),
                        'b.total_price as total_price',
                        DB::raw($this->getPlatformCaseStatement())
                    )
                    ->when($request->branch_ids, fn($query) => $query->whereIn('b.branch_id', $request->get('branch_ids')))
                    ->when($request->booking_status, function ($query) use ($request, $statusMapping) {
                        $mappedStatuses = $this->mapStatuses($request->get('booking_status'), $statusMapping);
                        if ($mappedStatuses) {
                            $query->whereIn('b.status', $mappedStatuses);
                        }
                    })
                    ->when($request->platform, function ($query) use ($request, $platformMapping) {
                        $mappedPlatforms = $this->mapPlatforms($request->get('platform'), $platformMapping);
                        if ($mappedPlatforms) {
                            $query->whereIn('b.platform', $mappedPlatforms);
                        }
                    })
                    ->when($request->start_date && $request->end_date, function ($query) use ($request) {
                        return $query->whereBetween('b.created_at', [$request->get('start_date'), $request->get('end_date')]);
                    })
                    ->when($request->search, function ($query) use ($request, $statusMapping, $platformMapping) {
                        return $this->applySearchConditions($query, $request->search, $statusMapping, $platformMapping);
                    })
                    ->whereIn('b.branch_id', $userBranches)
                    ->orderBy('b.id', 'ASC')
                    ->paginate(10);

        return Inertia::render('Admin/Reports/TransactionsReportIndex', [
            'transactionsReport' => $transactionsReport,
            'branches'           => $branches,
        ]);
    }

    private function getUserBranches($userId)
    {
        return DB::table('franchisee_users_branches')
                ->where('user_id', $userId)
                ->pluck('branch_id')
                ->toArray();
    }

    private function getStatusMapping()
    {
        return [
            'Pending'   => 1,
            'Ongoing'   => 2,
            'Cancelled' => 3,
            'Finished'  => 4,
            'Expired'   => 5,
            'Voided'    => 6,
        ];
    }

    private function getPlatformMapping()
    {
        return [
            'IOS'     => 0,
            'Android' => 1,
            'Walkin'  => 2,
        ];
    }

    private function mapStatuses($statuses, $statusMapping)
    {
        return array_filter(array_map(fn($status) => $statusMapping[$status] ?? null, $statuses), fn($value) => $value !== null);
    }

    private function mapPlatforms($platforms, $platformMapping)
    {
        return array_filter(array_map(fn($platform) => $platformMapping[$platform] ?? null, $platforms), fn($value) => $value !== null);
    }

    private function applySearchConditions($query, $search, $statusMapping, $platformMapping)
    {
        $statusValue   = $statusMapping[ucfirst(strtolower($search))] ?? null;
        $platformValue = $platformMapping[ucfirst(strtolower($search))] ?? null;

        return $query->where(function ($query) use ($search, $statusValue, $platformValue) {
            $query->where('br.name', 'like', "%$search%")
                ->orWhere('c.full_name', 'like', "%$search%")
                ->orWhere(function ($query) use ($statusValue) {
                    if ($statusValue !== null) {
                        $query->where('b.status', $statusValue);
                    }
                })
                ->orWhere(function ($query) use ($platformValue) {
                    if ($platformValue !== null) {
                        $query->where('b.platform', $platformValue);
                    }
                })
                ->orWhereRaw("DATE_FORMAT(b.created_at, '%M %d, %Y') like ?", ["%$search%"]);
        });
    }

    private function getBookingStatusCaseStatement()
    {
        return "
            CASE
                WHEN b.status = 1 THEN 'Pending'
                WHEN b.status = 2 THEN 'Ongoing'
                WHEN b.status = 3 THEN 'Cancelled'
                WHEN b.status = 4 THEN 'Finished'
                WHEN b.status = 5 THEN 'Expired'
                WHEN b.status = 6 THEN 'Voided'
                ELSE 'Unknown'
            END as booking_status
        ";
    }

    private function getPlatformCaseStatement()
    {
        return "
            CASE
                WHEN b.platform = 0 THEN 'IOS'
                WHEN b.platform = 1 THEN 'Android'
                WHEN b.platform = 2 THEN 'Walkin'
                ELSE 'Unknown'
            END as platform
        ";
    }

}
