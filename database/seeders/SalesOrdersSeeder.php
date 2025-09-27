<?php

namespace Database\Seeders;

use App\Models\SalesOrders\SalesOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesOrdersSeeder extends Seeder
{
    public function run(): void
    {
        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );



        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );

        SalesOrder::create(
            [
                'branch_id'        => mt_rand(1, 5),
                'customer_id'      => mt_rand(1, 10),
                'booking_id'       => mt_rand(1, 37),
                'reference_number' => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'invoice_number'   => (int) implode('', array_map(fn() => mt_rand(1, 9), range(1, 10))),
                'wax_amount'       => mt_rand(1, 30),
                'subtotal'         => $subtotal = mt_rand(150, 1000),
                'discount_total'   => $discount = mt_rand(15, 30),
                'grand_total'      => $subtotal - $discount,
                'status'           => ['PAID', 'VOIDED', 'BILLED'][array_rand(['PAID', 'VOIDED', 'BILLED'])]
            ]
        );
    }
}
