"use client"
import dynamic from "next/dynamic"
import Tilt from "@/components/UiElements/Tilt"
import Image from "next/image"

const AnimatedLogo: any = dynamic(() => import("@/components/UiElements/AnimatedLogo"))

const Hero = () => {
  return (
    <>
      <header className={`relative bg-gray-100 py-24 md:py-32 flex items-center justify-center max-w-full overflow-x-clip`}>
        <div className="wrapper grid grid-cols-12 gap-4 md:gap-6 lg:gap-8">
          <div className="col-span-12 md:col-span-5 flex justify-center items-center">
            <Tilt
              className={`md:w-full w-[65%] aspect-square  p-5 bg-black text-gray-100 shadow-2xl rounded-sm`}
              options={{
                perspective: 500,
                glare: true,
              }}
            >
              <AnimatedLogo />
            </Tilt>
          </div>
          <div className="col-span-12 md:col-span-7 flex flex-nowrap perspective-800 opacity-100">
            <Image
              className={`aspect-4/5 shadow-2xl shadow-black/75 preserve rounded scale-[80%] hover:-rotate-12 hover:-translate-y-1/4 hover:scale-100 transition-all duration-300`}
              alt={`image 1`}
              width={400}
              src={require("../../assets/img/homepage/kitch.webp")}
            />
            <Image
              className={`aspect-4/5 shadow-2xl shadow-black/75 preserve rounded scale-[90%] -translate-x-1/2 hover:rotate-6 hover:-translate-y-1/4 hover:scale-100 transition-all duration-300`}
              alt={`image 1`}
              width={400}
              src={require("../../assets/img/homepage/home2.webp")}
            />
            <Image
              className={`aspect-4/5 shadow-2xl shadow-black/75 preserve rounded -translate-x-full hover:rotate-12 hover:-translate-y-1/4 hover:scale-100 transition-all duration-300`}
              alt={`image 1`}
              width={400}
              src={require("../../assets/img/hair-salon.webp")}
            />
          </div>
        </div>
        <svg className={`absolute inset-x-0 max-w-full -bottom-[1px] fill-white`} xmlns="http://www.w3.org/2000/svg" data-name="Layer 2" viewBox="0 0 1920 129.4">
          <path d="M1920 0v129.4H0V0a4.99 4.99 0 0 0 4.35 4.96l927.04 120.71a220.84 220.84 0 0 0 57.22 0L1915.65 4.96A4.99 4.99 0 0 0 1920 0Z" />
        </svg>
      </header>
    </>
  )
}

export default Hero
