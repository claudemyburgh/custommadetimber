import preset from "./vendor/filament/support/tailwind.config.preset"
import colors from "tailwindcss/colors"
import defaultTheme from "tailwindcss/defaultTheme"

/** @type {import("tailwindcss").Config} */
export default {
    presets: [preset],
    darkMode: "class",
    content: ["./resources/**/*.blade.php", "./resources/**/*.ts", "./app/Filament/**/*.php", "./resources/views/filament/**/*.blade.php", "./vendor/filament/**/*.blade.php"],
    safelist: [".splide__arrow--prev", "splide__arrow--next"],
    theme: {
        extend: {
            fontFamily: {
                sans: ['"Albert Sans"', ...defaultTheme.fontFamily.serif],
            },
            borderRadius: {
                default: "0.5rem",
            },
            colors: {
                primary: {
                    DEFAULT: "#F54703",
                    50: "#FEC7B2",
                    100: "#FEB89D",
                    200: "#FD9B75",
                    300: "#FD7E4D",
                    400: "#FC6124",
                    500: "#F54703",
                    600: "#BE3702",
                    700: "#862702",
                    800: "#4F1701",
                    900: "#170700",
                    950: "#000000",
                },
                secondary: colors.neutral,
                gray: {
                    DEFAULT: "#1B1B1B",
                    50: "#C8C8C8",
                    100: "#BEBEBE",
                    200: "#AAAAAA",
                    300: "#959595",
                    400: "#818181",
                    500: "#6D6D6D",
                    600: "#585858",
                    700: "#444444",
                    800: "#2F2F2F",
                    900: "#1B1B1B",
                    950: "#0D0D0D",
                },
            },
        },
    },
    plugins: [require("@designbycode/tailwindcss-text-shadow"), require("@tailwindcss/forms"), require("@tailwindcss/typography")],
}
