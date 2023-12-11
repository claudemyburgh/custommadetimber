import type { Metadata } from "next"
import Image from "next/image"
import data from "@/data"
import Section from "@/components/Sections/Section"
import Title from "@/components/UiElements/Title"
import instagram from "@/assets/img/instagram.png"
import ImageCollection from "@/components/Sections/ImageCollection"

export const metadata: Metadata = {
  title: ("Gallery for " + data.name) as string,
}

export default function Gallery() {
  return (
    <Section className={`py-32 `} svgClass={`fill-gray-100`}>
      <Title>Gallery</Title>
      <a href={data.social.instagram} target={`_blank`} className={`translate-x-1 my-2 inline-flex`}>
        <Image loading={"eager"} width={103} height={29} alt={"Instagram"} src={instagram} />
        <span className={`sr-only`}>Instagram</span>
      </a>
      <Title type={"p"} className={`text-4xl`}>
        View Images on{" "}
        <a className={`link`} href={data.social.instagram} target={`_blank`}>
          Instagram
        </a>
      </Title>
      <div className="w-full">
        <ImageCollection />
      </div>
    </Section>
  )
}
