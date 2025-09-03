/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
    theme: {
        extend: {
            colors: {
                color1: "#A3B7AF", //更換主色
                color2: "#3E3A39", //更換副色
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        darkTheme: "light",
    },
}