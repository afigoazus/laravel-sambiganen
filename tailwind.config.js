import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                dusha: ["dusha", "sans-serif"],
            },
            colors: {
                primary: "#0081A7",
                secondary: "#00AFB9",
                after: "#F5F5F5",
                turqoise: "#00AFB9",
                cyan: "#01B8EC",
                lightBlue: "#67AEF0",
            },
            backgroundImage: {
                'hero-image' : "url('/public/assets/img/img-breadcrumb.svg')"
            }
        },
    },
    plugins: [],
};
