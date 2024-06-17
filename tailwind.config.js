import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "node_modules/preline/dist/*.js",
    ],

    darkMode: "class",

    theme: {
        extend: {
            colors: {
                brightRed: "hsl(12, 88%, 59%)",
                brightRedLight: "hsl(12, 88%, 69%)",
                brightRedSupLight: "hsl(12, 88%, 95%)",
                darkBlue: "hsl(228, 39%, 23%)",
                darkGrayishBlue: "hsl(227, 12%, 61%)",
                veryDarkBlue: "hsl(233, 12%, 13%)",
                veryPaleRed: "hsl(13, 100%, 96%)",
                veryLightGray: "hsl(0, 0%, 98%)",
            },
        },
    },

    plugins: [forms, require("preline/plugin")],
};
