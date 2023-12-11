import type { Metadata } from "next"
import data from "@/data"
import Section from "@/components/Sections/Section"
import Title from "@/components/UiElements/Title"
import Tilt from "@/components/UiElements/Tilt"
import Image from "next/image"
import business from "@/assets/img/aboutpage/about.webp"

export const metadata: Metadata = {
  title: ("About " + data.name) as string,
}

export default function AboutUs() {
  return (
    <Section className={`py-32 `} svgClass={`fill-gray-100`}>
      <div className="grid grid-cols-12 gap-4 md:gap-6 lg:gap-8  justify-center">
        <div className="col-span-12 md:col-span-8">
          <Title type={"h1"} className={`text-4xl`}>
            Welcome, let me introduce myself
          </Title>
          <Title type={"p"} className={`text-6xl font-semibold`}>
            My name is <br /> Coenie Marais
          </Title>
          <Title type={"p"} className={`text-2xl font-semibold`}>
            Owner and founder of <span className={`italic font-black text-primary-500`}>CUSTOM MADE TIMBER</span>
          </Title>
          <p className="leading-loose my-6 text-lg">
            <span className={`font-bold`}>CUSTOM MADE TIMBER</span> by Coenie Marais is a business that was created {new Date().getFullYear() - 2010} years ago through my love for
            working with timber and creating custom joinery for commercial and residential customers. I am hands on and passionate about providing a quality finished product. My
            team and I handle each project uniquely to ensure absolute customer satisfaction.
          </p>
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
