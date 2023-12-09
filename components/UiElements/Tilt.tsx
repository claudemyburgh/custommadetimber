"use client"
import { Children } from "@/types/Children"
import { TiltInterface } from "@/types/TiltInterface"
import React, { FC, MutableRefObject, useEffect, useRef } from "react"
import VanillaTilt from "vanilla-tilt"

const optionsDefault = {
  max: 10,
  speed: 1200,
  perspective: 800,
  glare: true,
  gyroscope: false,
}

const Tilt: FC<Children & TiltInterface & { props?: any; className?: string }> = ({ children, options, ...props }) => {
  const elm: MutableRefObject<any> = useRef()

  useEffect(() => {
    new VanillaTilt(elm.current, {
      ...optionsDefault,
      ...options,
    })
  }, [options, elm])

  return (
    <div ref={elm} style={{ position: "relative", zIndex: 5 }} {...props}>
      {children}
    </div>
  )
}

export default Tilt
