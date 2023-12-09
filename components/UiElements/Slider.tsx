"use client"
import React, { FC, MutableRefObject, useEffect, useRef } from "react"
import Image from "next/image"
import "flickity/css/flickity.css"
import Flickity from "flickity"

interface ImageData {
  image: string | object
  alt: string
  size?: {
    width: number
    height: number
  }
}

interface SliderProps {
  images: ImageData[]
}

const canUseDOM = !!(typeof window !== "undefined" && window.document && window.document.createElement)

const Slider: FC<SliderProps> = ({ images }) => {
  const carousel: MutableRefObject<any> = useRef(null)

  useEffect(() => {
    if (typeof window === "undefined" && !carousel.current) return

    let flick = new Flickity(carousel.current, {
      freeScroll: false,
      wrapAround: true,
      // @ts-expect-error
      draggable: ">1",
      autoPlay: true,
    })

    return () => {
      flick.destroy()
    }
  }, [])

  return (
    <div ref={carousel} className="shadow-2xl shadow-black rounded w-full overflow-clip">
      {images &&
        images.map(({ image, alt, size }, index) => (
          <Image
            key={index}
            className={`rounded w-full aspect-4/5 carousel-cell`}
            quality={80}
            priority={false}
            width={size?.width}
            height={size?.height}
            src={image as any}
            alt={alt}
          />
        ))}
    </div>
  )
}

export default Slider
