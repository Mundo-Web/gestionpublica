import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from 'glob';
import react from '@vitejs/plugin-react';

export default defineConfig({
    server: {
        watch: {
            ignored: ['!**/node_modules/your-package-name/**'],
        }
    },
    plugins: [
        react(),
        laravel({
            input: [
                ...glob.sync('resources/js/**/*.jsx'),
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
        return pages[`./Pages/${name}.jsx`]
    }
});
