import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/css/tailwind.css', 'public/assets/js/main.js'],
            refresh: true,
        }),
    ],
});
