import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel([
            'resources/css/style.css',
            'resources/js/app.js',
            'resources/js/script.js'
            
        ]),
    ],
});