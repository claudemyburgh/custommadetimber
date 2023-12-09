"use client"
import { HiMapPin, HiMiniEnvelope, HiMiniPhone } from "react-icons/hi2"
import { FaFacebookF, FaInstagram } from "react-icons/fa6"
import { SiGooglemybusiness } from "react-icons/si"
import Image from "next/image"
import data from "../../data"

const Footer = () => {
  return (
    <footer className={`bg-black text-white py-20`}>
      <div className="wrapper grid grid-cols-4 gap-4 md:gap-6 lg:gap-8">
        <div className={`col-span-1 aspect-square p-4 hidden md:block`}>
          <Image className={`relative md:top-4`} loading={"lazy"} height={415} width={372} src={require("../../assets/img/white-logo.svg")} alt={`${data.name}`} />
        </div>
        <div className="col-span-3">
          <h4 className="text-semibold text-lg mb-12">Feel free to get in contact with us by using the information listed below.</h4>
          <div className="grid lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8">
            <div>
              <h5 className={`text-semibold text-lg`}>Start a conversation</h5>
              <ul className={`list-none space-y-2 mt-2`}>
                <li className={`flex items-center space-x-2`}>
                  <HiMiniPhone size={18} color={`white`} />
                  <a className={`link`} href="tel:+27822964611">
                    +27 (0) 82 296 4611
                  </a>
                </li>
                <li className={`flex items-center space-x-2`}>
                  <HiMiniEnvelope size={18} color={"white"} />
                  <a className={`link`} href="mailto:coenie@custommadetimber.co.za">
                    coenie@custommadetimber.co.za
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <h5 className={`text-semibold text-lg`}>Find us in the real world</h5>
              <ul className={`list-none space-y-2 mt-2`}>
                <li className={`flex items-center space-x-2`}>
                  <HiMapPin size={18} color={`white`} />
                  <a className={`link`} href="https://goo.gl/maps/EZ7pg8DdxRycgAes5">
                    27 Shiraz Rd, Rustdal, <br /> Cape Town, 7580
                  </a>
                </li>
              </ul>
            </div>

            <div>
              <h5 className={`text-semibold text-lg`}>Social Pages</h5>
              <div className="flex space-x-2 mt-2">
                <a
                  href={data.social.facebook}
                  rel="noreferrer"
                  target="_blank"
                  className={`h-12 w-12 flex items-center justify-center border border-primary-500 hover:bg-primary-500 hover:text-black`}
                >
                  <FaFacebookF size={20} />
                </a>
                <a
                  href={data.social.instagram}
                  rel="noreferrer"
                  target="_blank"
                  className={`h-12 w-12 flex items-center justify-center border border-primary-500 hover:bg-primary-500 hover:text-black`}
                >
                  <FaInstagram size={20} />
                </a>
                <a
                  href={data.social.google_my_business}
                  rel="noreferrer"
                  target="_blank"
                  className={`h-12 w-12 flex items-center justify-center border border-primary-500 hover:bg-primary-500 hover:text-black`}
                >
                  <SiGooglemybusiness size={20} />
                </a>
              </div>
            </div>
          </div>
          <div className="my-12">
            The site is registered to {data.name?.toUpperCase()} by Coenie Marais 2016 - {new Date().getFullYear()}
          </div>
          <div className="my-12">
            Design and Developed with ♥ by{" "}
            <a className={`link`} href="https://designbycode.co.za">
              DesignByCode
            </a>
          </div>
        </div>
      </div>
    </footer>
  )
}

export default Footer
