/** @type {import('tailwindcss').Config} */
export default {
    content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js"
    ],
    theme: {
        extend: {
            colors:{
                'black': '#060606',
            },
            fontFamily:{
                "hanken-grotesk": ["Hanken Grotesk", "sans-serif"],
            },
            fontSize:{
                "xs": "10px" //10px
            },
        },
      },
    plugins: [],
}

