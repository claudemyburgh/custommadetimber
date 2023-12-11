import type { Metadata } from "next"
import data from "@/data"
import Section from "@/components/Sections/Section"
import Title from "@/components/UiElements/Title"
import Tilt from "@/components/UiElements/Tilt"
import Image from "next/image"
import business from "@/assets/img/contactPage/feet.webp"
import { BsEnvelopeAt, BsPhoneVibrate } from "react-icons/bs"

export const metadata: Metadata = {
  title: ("Contact Coenie Marais at " + data.name) as string,
}

export default function ContactUs() {
  return (
    <Section className={`py-32 `} svgClass={`fill-gray-100`}>
      <div className="grid grid-cols-12 gap-4 md:gap-6 lg:gap-8 justify-center">
        <div className="col-span-12 md:col-span-8">
          <Title type={"h1"} className={`text-4xl`}>
            Lets talk business
          </Title>
          <Title type={"p"} className={`text-6xl font-semibold`}>
            Contact Coenie Marais
          </Title>

          <ul className={`list-none space-y-2 my-4 text-xl`}>
            <li className={`flex items-center space-x-3`}>
              <BsPhoneVibrate size={26} />
              <a className={`link`} href="tel:+27822964611">
                +27 (0) 82 296 4611
              </a>
            </li>
            <li className={`flex items-center space-x-3`}>
              <BsEnvelopeAt size={24} />
              <a className={`link`} href="mailto:coenie@custommadetimber.co.za">
                coenie@custommadetimber.co.za
              </a>
            </li>
          </ul>
        </div>
        <div className={`col-span-12 md:col-span-4`}>
          <Tilt>
            <div className={`image__wrapper`}>
              <Image className={`rounded shadow-2xl shadow-black/50`} width={500} height={680} layout="responsive" src={business} alt="about page images" />
            </div>
          </Tilt>
        </div>
      </div>
    </Section>
  )
}
