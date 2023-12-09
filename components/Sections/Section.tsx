import type { Children } from "@/types/Children"
import React, { FC } from "react"
import { twMerge } from "tailwind-merge"

const Section: FC<Children & { className?: string; svgClass?: string }> = ({ children, className, svgClass }) => {
  return (
    <section className={twMerge("relative pt-12 pb-[160px]", className)}>
      <div className="wrapper">{children}</div>
      <svg
        aria-hidden={true}
        className={twMerge(`absolute inset-x-0 max-w-full w-full -bottom-[1px] fill-transparent`, svgClass)}
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1920 129.4"
      >
        <path d="M1920 0v129.4H0V0a4.99 4.99 0 0 0 4.35 4.96l927.04 120.71a220.84 220.84 0 0 0 57.22 0L1915.65 4.96A4.99 4.99 0 0 0 1920 0Z" />
      </svg>
    </section>
  )
}

export default Section
