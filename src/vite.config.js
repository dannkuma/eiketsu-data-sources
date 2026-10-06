import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/modal/general-sort-detail.js",
                "resources/js/modal/heirloom-sort-detail.js",
            ],
            refresh: true,
        }),
    ],
});
