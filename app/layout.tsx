import type { Metadata } from "next"
import "./globals.css"
import React from "react"
import Navbar from "@/components/Sections/Navbar"
import Footer from "@/components/Sections/Footer"
import { twMerge } from "tailwind-merge"
import data from "@/data"
import { BodyFont } from "@/assets/fonts"
import SocialSection from "@/components/Sections/SocialSection"

export const metadata: Metadata = {
  title: data.name as string,
}

export default function RootLayout({ children }: { children: React.ReactNode }) {
  return (
    <html lang="en" className={`scroll-smooth`}>
      <body className={twMerge(`${BodyFont.variable} font-sans`, "overflow-x-clip max-w-full accent-primary-500")}>
        <Navbar />
        {children}
        <SocialSection />
        <Footer />
      </body>
    </html>
  )
}
