import { Playfair_Display, Raleway } from "next/font/google"

export const BodyFont = Raleway({ subsets: ["latin"], weight: ["300", "400", "500", "700", "900"], variable: "--font-body" })
export const HeadingFont = Playfair_Display({ subsets: ["latin"], weight: ["400", "600", "700", "800", "900"], variable: "--font-heading" })
