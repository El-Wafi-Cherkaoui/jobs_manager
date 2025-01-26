import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                dblack: "#343131",
                dshadow: "#343131",
                dwhite: "#EEEEEE",
                dorange: "#d8a25e"
            },
            boxShadow: {
                navShadow: '0vw 1vh .5vh #393E46',
                // borderShadow: '0vw 1vh .1vh #D8A25E',
                cornerShadow: '0vw .5vh .1vh #D8A25E',
            }
        },
    },
    plugins: [],

};
