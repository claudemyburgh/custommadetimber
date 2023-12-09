"use client"
import { usePathname } from "next/navigation"
import Link from "next/link"
import navigation from "@/data/navigation"
import { twMerge } from "tailwind-merge"
import { Menu } from "@headlessui/react"
import { HiBars3BottomRight } from "react-icons/hi2"
import data from "@/data"
import Image from "next/image"

export default function Navbar() {
  const pathname = usePathname()

  const isActive = (path: string) => {
    return "active" && pathname === path
  }

  return (
    <Menu as={"nav"} className={`bg-black w-full min-h-[70px] fixed top-0 inset-x-0 flex items-center z-[100]`}>
      <div className="wrapper relative">
        <div className="flex justify-between">
          <Link className={`text-white`} href={`/`}>
            <Image className={`relative md:top-3`} loading={"eager"} height={50} src={require("../../assets/img/menu-logo2.svg")} alt={`${data.name}`} />
            <span className={`sr-only`}>{data.name}</span>
          </Link>
          <Menu.Button className={`text-white md:hidden`}>
            <HiBars3BottomRight size={30} />
          </Menu.Button>

          <div className={`text-white hidden md:flex`}>
            {navigation.map((link) => (
              <Link
                className={twMerge(`px-4 shadow-md h-[70px] inline-flex items-center hover:bg-white hover:text-black font-base`, isActive(link.route) && `text-black bg-white`)}
                key={link.name}
                href={link.route}
              >
                {link.name}
              </Link>
            ))}
          </div>
        </div>
      </div>
      <Menu.Items className="text-white absolute top-[70px] bg-black w-full ">
        <div className="wrapper py-4">
          {navigation.map((link) => (
            <Menu.Item key={link.name}>
              <Link
                className={twMerge(`px-4 shadow-md h-[50px] flex items-center hover:bg-white hover:text-black font-base`, isActive(link.route) && `text-black bg-white`)}
                href={link.route}
              >
                {link.name}
              </Link>
            </Menu.Item>
          ))}
        </div>
      </Menu.Items>
    </Menu>
  )
}
