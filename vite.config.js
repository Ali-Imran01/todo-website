// Vite's helper for writing this config file with autocomplete.
import { defineConfig } from 'vite';
// Laravel's Vite plugin: links Vite to Blade's @vite() directive.
import laravel from 'laravel-vite-plugin';

// Export the config that Vite reads when you run `npm run dev` or `npm run build`.
export default defineConfig({
    // The list of Vite plugins to use.
    plugins: [
        // Set up the Laravel plugin.
        laravel({
            // The entry files that Blade loads through @vite([...]) in the layout.
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // Reload the browser automatically when a Blade file changes.
            refresh: true,
        }),
    ],
    // Dev server settings.
    server: {
        // File watcher settings.
        watch: {
            // Don't reload on Laravel's compiled view cache (it changes constantly).
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
