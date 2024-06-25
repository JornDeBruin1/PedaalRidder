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
                aboutUsImage:
                    "url('/resources/images/about-us-header.png')",
                aboutUsImage2:
                    "url('/resources/images/Text-media-new_wrapper.png')",
                contentImgIndex:
                    "url('/resources/images/content-index-img.png')",
                headerImgProducts:"url('/resources/images/product-header.png')",

            },
        },
    },
    plugins: [],
};
