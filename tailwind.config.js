const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './safelist.txt'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                indigo: colors.indigo,
                rose: colors.rose,
                blueGray: colors.blueGray,
                lightBlue: colors.sky,
                orange: colors.orange,
                red: colors.red
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
