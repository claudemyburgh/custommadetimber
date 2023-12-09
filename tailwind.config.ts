import type { Config } from "tailwindcss"
import colors from "tailwindcss/colors"

const config: Config = {
  safelist: [".flickity", ".flickity-button", ".flickity-button-icon", ".flickity-page-dots", ".flickity-page-dot"],
  content: ["./pages/**/*.{js,ts,jsx,tsx,mdx}", "./components/**/*.{js,ts,jsx,tsx,mdx}", "./app/**/*.{js,ts,jsx,tsx,mdx}"],
  corePlugins: {},
  theme: {
    extend: {
      aspectRatio: {
        "4/5": "4 / 5",
      },
      colors: {
        primary: colors.teal,
      },
      fontFamily: {
        sans: "var(--font-body)",
        heading: "var(--font-heading)",
      },
    },
  },
  plugins: [
    require("@designbycode/tailwindcss-text-shadow")({
      shadowColor: "rgba(0, 0, 0, 0.5)",
      shadowBlur: "3px",
      shadowOffsetX: "2px",
      shadowOffsetY: "2px",
    }),
  ],
}
export default config
