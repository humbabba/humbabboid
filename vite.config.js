import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
    root: './',
    build: {
        outDir: 'dist',
        emptyOutDir: true,
        rollupOptions: {
            input: {
                frontend: path.resolve(__dirname, 'assets/js/frontend/app.js'),
                admin: path.resolve(__dirname, 'assets/js/admin/app.js'),
            },
            output: {
                entryFileNames: 'js/[name]/app.js',
                chunkFileNames: 'js/[name]/[name]-[hash].js',
                assetFileNames: ({ name }) => {
                    // Map CSS assets to the right frontend/admin folder
                    if (name && name.endsWith('.css')) {
                        if (name.includes('frontend')) return 'css/frontend/style.css';
                        if (name.includes('admin')) return 'css/admin/style.css';
                    }
                    return 'assets/[name]';
                },
            },
        },
    },
    css: {
        postcss: path.resolve(__dirname, 'postcss.config.js'),
    },
});
