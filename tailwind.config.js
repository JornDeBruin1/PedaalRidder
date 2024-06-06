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
                headerImgIndex: "url('/resources/images/header-image.png')",
                contentImgIndex:
                    "url('/resources/images/content-index-img.png')",
            },
        },
    },
    plugins: [],
};
