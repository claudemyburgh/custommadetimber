"use client"
import Image from "next/image"
import Tilt from "@/components/UiElements/Tilt"
import { MutableRefObject, useEffect, useRef } from "react"
// @ts-expect-error
import SimpleLightbox from "simplelightbox"

function importAll(r: any) {
  return r.keys().map(r)
}

interface ImageProp {
  default: {
    src: string
    blurDataURL: string
    width: number
    height: number
  }
}

// @ts-expect-error
const images = importAll(require.context("@/app/images/", false, /\.(png|jpe?g|svg|webp)$/))

const SingleImage = ({ image }: any) => {
  return (
    <a href={image.default.src} className="aspect-square">
      <Tilt className="w-full p-2 shadow-black/30 shadow-xl bg-gray-100">
        <Image
          className={`object-fill aspect-square`}
          blurDataURL={image.default.blurDataURL}
          src={image.default.src}
          layout="responsive"
          width={120}
          height={120}
          alt="Instagram images"
        />
      </Tilt>
    </a>
  )
}

const ImageCollection = () => {
  const targetRef: MutableRefObject<HTMLDivElement | null> = useRef(null)

  const lightbox = () => {
    return new SimpleLightbox((targetRef.current as HTMLElement).querySelectorAll("a"), {
      animationSpeed: 200,
      caption: true,
    })
  }

  useEffect(() => {
    lightbox()
  }, [])

  return (
    <div ref={targetRef} className={`grid grid-cols-4 gap-4 md:gap-6 lg:gap-8 my-4`}>
      {images && images.map((image: any, index: number) => <SingleImage key={index} image={image} />)}
    </div>
  )
}

export default ImageCollection
