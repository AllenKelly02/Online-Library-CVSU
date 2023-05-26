const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./index.php",
        "./src/**/*.{js,ts,jsx,tsx}",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // backgroundImage: {
            //     'hero-pattern': "url('/images/cvsubg.png')",
            //     'footer-texture': "url('/img/footer-texture.png')",
            // },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui')
    ],
};
