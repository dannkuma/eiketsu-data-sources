import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                "brand-dark": "#423D3D",
                "brand-yamabuki": "#F3CB17",
                "brand-orange": "#DA7940",
                "brand-brown": "#A14B19",
            },
            fontFamily: {
                mincho: [
                    "Zen Old Mincho",
                    "Hiragino Mincho ProN",
                    ...defaultTheme.fontFamily.serif,
                ],
                sans: [
                    ...defaultTheme.fontFamily.sans,
                ],
            },
        },
    },

    plugins: [forms],
};
