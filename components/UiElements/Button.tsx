import { FC } from "react"
import Link from "next/link"
import { Children } from "@/types/Children"
import { twMerge } from "tailwind-merge"

const Button: FC<{ href: string; className?: string } & Children> = ({ href, children, className, ...rest }) => {
  return (
    <Link {...rest} className={twMerge(`px-6 py-4 rounded bg-black text-white hover:bg-black/90 inline-flex`, className)} href={href}>
      {children}
    </Link>
  )
}

export default Button
