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
                "brand-base-back": "#D0D0D0",
                "brand-dark": "#423D3D",
                "brand-yamabuki": "#F3CB17",
                "brand-orange": "#DA7940",
                "brand-brown": "#A14B19",
                "brand-action-light": "#C44E5C",
                "brand-action-dark": "#B52C3A",
                "brand-cancel-light": "#426CB0",
                "brand-cancel-dark": "#1D4A96",
                "brand-success-light": "#9CD669",
                "brand-success-dark": "#109552",
                "brand-logout-light": "#99918F",
                "brand-logout-dark": "#34292A",
            },
            fontFamily: {
                mincho: [
                    "Zen Old Mincho",
                    "Hiragino Mincho ProN",
                    ...defaultTheme.fontFamily.serif,
                ],
                sans: [...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
