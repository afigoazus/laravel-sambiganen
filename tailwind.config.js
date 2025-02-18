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
                ibm: ['IBM Plex Sans', 'sans-serif'],
                poppins: ['Poppins', 'sans-serif'],   
            },
            colors: {
                primary: "#0081A7",
                secondary: "#00AFB9",
                after: "#F5F5F5",
                turqoise: "#00AFB9",
                cyan: "#01B8EC",
                lightBlue: "#67AEF0",
                yellowCustom: "#FDFCDC", 
                darkGray: "#4B5563",
                yellow: "#FFB600",
                skyblue: "#B3E0FF4D"
            },
            backgroundImage: {
                'hero-image' : "url('/public/assets/img/img-breadcrumb.svg')",
                'gradient-header': 'linear-gradient(to right, #003B4A, #0081A7)'
            },
            
            keyframes: {
                zoom: {
                    '0%': { transform: 'scale(0)' },
                    '100%': { transform: 'scale(1)' },
                },
            },
            animation: {
                zoom: 'zoom 0.6s',
            }
        },
    },
    plugins: [],
};
