"use client"
import { FC } from "react"
import { HeadingFont } from "@/assets/fonts"
import { Children } from "@/types/Children"
import { twMerge } from "tailwind-merge"

interface TitleProps extends Children {
  type?: "h1" | "h2" | "h3" | "h4" | "h5" | "h6" | "p"
  className?: string
}

const Title: FC<TitleProps> = ({ type = "h1", className, children, ...rest }) => {
  const Heading = type
  return (
    <Heading {...rest} className={twMerge(`${HeadingFont.variable} font-heading text-6xl font-semibold tracking-tight `, className)}>
      {children}
    </Heading>
  )
}

export default Title
