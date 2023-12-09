import React from "react"
import Hero from "@/components/Sections/Hero"
import Section from "@/components/Sections/Section"
import Button from "@/components/UiElements/Button"
import Tilt from "@/components/UiElements/Tilt"
import home from "@/assets/img/homepage/home.webp"
import home2 from "@/assets/img/homepage/home2.webp"
import home3 from "@/assets/img/homepage/home3.webp"
import type { Metadata } from "next"
import data from "@/data"
import Title from "@/components/UiElements/Title"
import dynamic from "next/dynamic"

const Slider = dynamic(() => import("@/components/UiElements/Slider"), { ssr: false })
const GridImages = dynamic(() => import("@/components/UiElements/GridImages"), { ssr: false })

export const metadata: Metadata = {
  title: ("Welcome to " + data.name) as string,
}

export default function Home() {
  return (
    <>
      <Hero />
      <Section className={`bg-white relative`} svgClass={`fill-gray-200`}>
        <div className="grid grid-cols-12 gap-4 md:gap-6 lg:gap-8 items-center">
          <div className={`col-span-12 md:col-span-5 `}>
            <Tilt className={`w-full bg-gray-200 rounded aspect-4/5`}>
              <Slider
                images={[
                  {
                    image: home,
                    alt: "wooden home at twilight",
                    size: {
                      width: 400,
                      height: 500,
                    },
                  },
                  {
                    image: home2,
                    alt: "wooden home with steps",
                    size: {
                      width: 400,
                      height: 500,
                    },
                  },
                  {
                    image: home3,
                    alt: "alt",
                    size: {
                      width: 400,
                      height: 500,
                    },
                  },
                ]}
              />
            </Tilt>
          </div>

          <div className={`col-span-12 md:col-span-7`}>
            <Title className={`text-shadow text-shadow-x-3 text-shadow-y-3 text-shadow-black text-shadow-blur-2`}>Custom Made Timber</Title>
            <Title type={`h6`} className={`font-light text-3xl text-primary-500 italic`}>
              by Coenie Marais
            </Title>

            <p className={`leading-loose my-6 text-lg`}>
              Specializing in both interior and exterior joinery work across South Africa, Custom Made Timber, led by Coenie Marais, caters to projects of any size. Our renowned
              craftsmanship has garnered a loyal customer base, offering tailored solutions to meet the unique needs of every project, regardless of its scale.
            </p>
            <Button href={`/gallery`}>View Gallery</Button>
          </div>
        </div>
      </Section>
      <Section className={`bg-gray-200 relative`} svgClass={`fill-white`}>
        <div className="grid md:grid-cols-12 gap-4 md:gap-6 lg:gap-8 items-center justify-center min-h-[600px]">
          <Tilt className={`col-span-6 bg-black rounded aspect-square`}>
            <GridImages
              images={[
                {
                  thumbnail: "/img/corporate/thumbnail/01.webp",
                  image: "/img/corporate/01.webp",
                  alt: "corporate image set 1 of 9",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/02.webp",
                  image: "/img/corporate/02.webp",
                  alt: "corporate image set 2 of 9 ",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/03.webp",
                  image: "/img/corporate/03.webp",
                  alt: "corporate image set 3 of 9",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/04.webp",
                  image: "/img/corporate/04.webp",
                  alt: "corporate image set 4 of 9",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/05.webp",
                  image: "/img/corporate/05.webp",
                  alt: "corporate image set 5 of 9",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/06.webp",
                  image: "/img/corporate/06.webp",
                  alt: "corporate image set 6 of 9",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/07.webp",
                  image: "/img/corporate/07.webp",
                  alt: "corporate image set 7 of 9",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/08.webp",
                  image: "/img/corporate/08.webp",
                  alt: "corporate image set 8 of 9",
                },
                {
                  thumbnail: "/img/corporate/thumbnail/09.webp",
                  image: "/img/corporate/09.webp",
                  alt: "corporate image set 9 of 9",
                },
              ]}
            />
          </Tilt>
          <div className={`col-span-6`}>
            <Title type={`h2`}>Corporate Projects</Title>
            <Title type={`h6`} className={`font-light text-3xl text-primary-500 italic`}>
              for business owners
            </Title>
            <p className={`leading-loose my-6 text-lg`}>
              From intricate interior fixtures to durable exterior installations, we offer expert craftsmanship tailored to the unique needs of corporate spaces.
            </p>
            <p className={`leading-loose my-6 text-lg`}>
              With a focus on superior quality and personalized service, we transform visions into stunning timber creations that reflect professionalism, durability, and timeless
              elegance.
            </p>
            <Button href={`/gallery`}>View Gallery</Button>
          </div>
        </div>
      </Section>
      <Section className={`bg-white relative`} svgClass={`fill-gray-100`}>
        <div className="grid md:grid-cols-12 gap-4 md:gap-6 lg:gap-8 items-center justify-center min-h-[600px]">
          <Tilt className={`col-span-6 bg-black rounded aspect-square`}>
            <GridImages
              images={[
                {
                  thumbnail: "/img/residential/thumbnail/01.webp",
                  image: "/img/residential/01.webp",
                  alt: "residential image set 1 of 9",
                },
                {
                  thumbnail: "/img/residential/thumbnail/02.webp",
                  image: "/img/residential/02.webp",
                  alt: "residential image set 2 of 9 ",
                },
                {
                  thumbnail: "/img/residential/thumbnail/03.webp",
                  image: "/img/residential/03.webp",
                  alt: "residential image set 3 of 9",
                },
                {
                  thumbnail: "/img/residential/thumbnail/04.webp",
                  image: "/img/residential/04.webp",
                  alt: "residential image set 4 of 9",
                },
                {
                  thumbnail: "/img/residential/thumbnail/05.webp",
                  image: "/img/residential/05.webp",
                  alt: "residential image set 5 of 9",
                },
                {
                  thumbnail: "/img/residential/thumbnail/06.webp",
                  image: "/img/residential/06.webp",
                  alt: "residential image set 6 of 9",
                },
                {
                  thumbnail: "/img/residential/thumbnail/07.webp",
                  image: "/img/residential/07.webp",
                  alt: "residential image set 7 of 9",
                },
                {
                  thumbnail: "/img/residential/thumbnail/08.webp",
                  image: "/img/residential/08.webp",
                  alt: "residential image set 8 of 9",
                },
                {
                  thumbnail: "/img/residential/thumbnail/09.webp",
                  image: "/img/residential/09.webp",
                  alt: "residential image set 9 of 9",
                },
              ]}
            />
          </Tilt>
          <div className={`col-span-6`}>
            <Title type={`h2`}>Residential Projects</Title>
            <Title type={`h6`} className={`font-light text-3xl text-primary-500 italic`}>
              for home owners
            </Title>
            <p className={`leading-loose my-6 text-lg`}>
              Our tailored timber solutions cater to the individual tastes and needs of homeowners, crafting exquisite interior and exterior features that transform living spaces
              into personalized havens.
            </p>
            <p className={`leading-loose my-6 text-lg`}>
              From custom-built furniture to intricate cabinetry, doors, windows, and outdoor structures, we blend expertise with creativity to bring your vision to life.
            </p>
            <Button href={`/gallery`}>View Gallery</Button>
          </div>
        </div>
      </Section>
    </>
  )
}
