import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: 'resources/js/app.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
            additionalData: `
                @import "flowbite";
            `,
            },
        },
    },

    // to test in mobile
    // server: {
    //     host: '0.0.0.0', // Allow access from any network
    //     port: 5173,      // Ensure it's different from Laravel's port
    //     strictPort: true,
    //     hmr: {
    //       host: '192.168.1.2', // Ensure HMR connects correctly
    //     },
    //   },
});
