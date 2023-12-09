import Section from "@/components/Sections/Section"
import Title from "@/components/UiElements/Title"
import Tilt from "@/components/UiElements/Tilt"
import data from "@/data"
import { FaFacebookF, FaInstagram } from "react-icons/fa6"
import { SiGooglemybusiness } from "react-icons/si"

const SocialSection = () => {
  return (
    <Section className={`bg-gray-100`} svgClass={`fill-black`}>
      <Title type={`p`} className={`text-3xl`}>
        Follow us
      </Title>
      <Title type={`p`}>On Social Media</Title>
      <Title type={`p`} className={`font-light text-3xl text-primary-500 italic`}>
        Don&apos;t forget to give us a like
      </Title>

      <div className="flex flex-wrap my-12 space-x-8">
        <Tilt className={`shadow-2xl`}>
          <a
            href={data.social.facebook}
            rel="noreferrer"
            target="_blank"
            className={`w-[110px] md:w-[160px]  p-4 aspect-square border border-black rounded flex flex-col items-center justify-center text-center text-black hover:text-white bg-white hover:bg-black`}
          >
            <FaFacebookF size={60} />
            <div className={`sr-only`}>Facebook</div>
          </a>
        </Tilt>
        <Tilt className={`shadow-2xl`}>
          <a
            href={data.social.instagram}
            rel="noreferrer"
            target="_blank"
            className={`w-[110px] md:w-[160px]  p-4 aspect-square border border-black rounded flex flex-col items-center justify-center text-center text-black hover:text-white bg-white hover:bg-black`}
          >
            <FaInstagram size={60} />
            <div className={`sr-only`}>Instagram</div>
          </a>
        </Tilt>
        <Tilt className={`shadow-2xl`}>
          <a
            href={data.social.google_my_business}
            rel="noreferrer"
            target="_blank"
            className={`w-[110px] md:w-[160px]  p-4 aspect-square border border-black rounded flex flex-col items-center justify-center text-center text-black hover:text-white bg-white hover:bg-black`}
          >
            <SiGooglemybusiness size={60} />
            <div className={`sr-only`}>Google MyBusiness</div>
          </a>
        </Tilt>
      </div>
    </Section>
  )
}

export default SocialSection
