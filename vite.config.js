import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        // Generate manifest untuk production
        manifest: true,
        
        // Output ke public/build
        outDir: 'public/build',
        
        // Rollup options untuk optimasi
        rollupOptions: {
            output: {
                // Nama file yang konsisten (seperti CDN)
                entryFileNames: 'assets/[name].js',
                chunkFileNames: 'assets/[name].js',
                assetFileNames: 'assets/[name].[ext]'
            }
        },
        
        // Minify untuk ukuran lebih kecil
        minify: 'terser',
        
        // Source map untuk debugging (opsional)
        sourcemap: false,
    },
    
    // Untuk akses dari jaringan lokal
    server: {
        host: '0.0.0.0',
        port: 8080,
        hmr: {
            host: 'localhost',
        },
    },
    
    // Base URL untuk production
    base: '/build/',
});