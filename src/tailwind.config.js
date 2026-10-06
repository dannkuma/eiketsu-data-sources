import defaultTheme from "tailwindcss/defaultTheme";
import plugin from "tailwindcss/plugin";
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
                "brand-balance": "#5F301A",
                "brand-disabled": "#8E8E8E",
                "brand-deck-area-light": "#F8F8F8",
                "brand-deck-area-dark": "#D9D9D9",
                "brand-deck-list-cost": "#0058A3",
                "brand-deck-area-button": "#056AF6",
                "brand-detail-title-border": "#F8CF50",
                "brand-info-area": "#333333",
                "brand-general-record-blue": "#8AB9FF",
                "brand-general-record-red": "#F1D2D2",
                "brand-general-record-green": "#CCE3D7",
                "brand-general-record-gray": "#E0E0DF",
                "brand-general-record-purple": "#E8CDE4",
                "brand-general-record-orange": "#FFE4D1",
                "brand-general-record-yellow": "#FFFFD5",
                "brand-general-special-skill-none": "#606060",
                "brand-general-special-skill": "#FFE701",
                "brand-datalist-category-selected": "#A1383A",
                "brand-datalist-category-border": "#C7B39A",
                "brand-sort-detail-base-back": "#091167",
                "brand-sort-detail-base-back-light": "#0C1322",
                "brand-sort-detail-header-selected": "#CA524F",
                "brand-sort-detail-header-unselected": "#27347B",
                "brand-sort-detail-header-reset": "#056AF6",
                "brand-sort-detail-header-decide": "#AE2332",
                "brand-sort-detail-header-border": "#C0A657",
                "brand-sort-detail-toggle-unselected": "#012B51",
                "brand-sort-detail-button-unselected": "#DCD6C4",
                "brand-sort-detail-button-selected": "#F9CB4F",
                "brand-sort-detail-button-text-blue": "#003BFF",
                "brand-sort-detail-button-text-red": "#F12121",
                "brand-sort-detail-button-text-green": "#17C13B",
                "brand-sort-detail-button-text-gray": "#808080",
                "brand-sort-detail-button-text-purple": "#9615FF",
                "brand-sort-detail-button-text-orange": "#FF6400",
                "brand-sort-detail-button-text-yellow": "#efbc02",
                "brand-sort-detail-current-sort": "#707155",
                "brand-sort-detail-current-sort-up-arrow": "#A71E1E",
                "brand-sort-detail-current-sort-down-arrow": "#1640FC",
                "brand-detail-switch-button": "#757575",
                "brand-search-button": "#FFFF4D",
                "brand-heirloom-info-category-area": "#FBD471",
                "brand-heirloom-record-inventory": "#666666",
                "brand-heirloom-record-condition": "#F43230",
                "brand-heirloom-bring-icon": "#F54F00",
                "brand-heirloom-bring": "#FFD8AB",
                "brand-heirloom-not-stored": "#C0D4ED",
                "brand-star": "#FFBE26",
                "brand-soul-arrow-equipment": "#D3771A",
                "brand-soul-arrow-unequipment": "#361AD3",
            },
            fontFamily: {
                mincho: [
                    "Zen Old Mincho",
                    "Hiragino Mincho ProN",
                    ...defaultTheme.fontFamily.serif,
                ],
                sans: [...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                "brand-sort-detail-sort-switch":
                    "linear-gradient(to bottom, #D9D9D9, #606060)",
                "brand-sort-detail-toggle-switch":
                    "linear-gradient(to bottom, #D9D9D9, #737373)",
                "brand-owned-heirloom-button-white":
                    "linear-gradient(to bottom, #FFFFFF, #EAEAEA)",
            },
        },
    },

    plugins: [
        forms,
        plugin(({ addUtilities }) => {
            addUtilities({
                ".text-outline-black": {
                    color: "#ffffff",
                    "-webkit-text-stroke": "0.01px #000000",
                },
                ".text-outline-red": {
                    color: "#ffffff",
                    "-webkit-text-stroke": "0.01px #FF0000",
                },
                ".clip-path-tag": {
                    "clip-path":
                        "polygon(10px 0, calc(100% - 10px) 0, 100% 50%, calc(100% - 10px) 100%, 10px 100%, 0 50%)",
                },
            });
        }),
    ],
};
