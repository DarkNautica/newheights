import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: false, // Disable dark mode
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/flowbite/**/*.js'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Mont', ...defaultTheme.fontFamily.sans], // Set Mont as the default text font
                heading: ['Mont Bold', ...defaultTheme.fontFamily.sans], // Set Mont Bold for headings
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
    ],
};
