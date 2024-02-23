/** @type {import('tailwindcss').Config} */
export default {
    darkMode: [
        'media',
        'selector',
        '[data-mode="dark"]',
    ],
    content: [
        "./node_modules/flowbite/**/*.js",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require("daisyui"),
        require('flowbite/plugin'),
    ],
}
