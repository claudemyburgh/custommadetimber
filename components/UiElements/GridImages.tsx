"use client"
import { FC, MutableRefObject, useEffect, useRef } from "react"
import Image from "next/image"
import { twMerge } from "tailwind-merge"
// @ts-expect-error
import SimpleLightbox from "simplelightbox"
import "simplelightbox/src/simple-lightbox.scss"

interface Icon {
  image: string
  thumbnail: string
  alt: string
}

interface Icons {
  images: Icon[]
}

export const IconComponent: FC<Icon> = ({ image, thumbnail, alt }) => {
  return (
    <a href={image} className={twMerge("aspect-square w-full bg-gray-300 rounded")}>
      <Image priority={false} loading={"lazy"} className={`rounded border border-white w-full aspect-square`} height={170} width={170} src={thumbnail} alt={alt} />
    </a>
  )
}

const GridImages: FC<Icons> = ({ images }) => {
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
    <div ref={targetRef} className={`w-full border-2 border-white aspect-square rounded shadow-2xl shadow-black/50 bg-gray-100 grid grid-cols-3 p-2 grid-rows-3 gap-2`}>
      {images && images.map(({ image, thumbnail, alt }, index) => <IconComponent key={index} image={image} thumbnail={thumbnail} alt={alt} />)}
    </div>
  )
}

export default GridImages
