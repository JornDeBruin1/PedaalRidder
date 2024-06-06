/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                headerImgProducts:"url('/resources/images/product-header.png')",
            },
        },
    },
    plugins: [],
};
