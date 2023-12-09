"use client"
import React, { MutableRefObject, useEffect, useRef } from "react"
import lottie from "lottie-web"
import logoElement from "@/assets/img/animation_kjkcdjnp.json"

const AnimatedLogo = () => {
  const container: MutableRefObject<any> = useRef()

  useEffect(() => {
    lottie.loadAnimation({
      container: container.current,
      renderer: "svg",
      loop: false,
      autoplay: true,
      animationData: logoElement,
    })
    return () => {
      lottie.destroy()
    }
  }, [])

  return <div ref={container} className={`w-full p-12`} />
}

export default AnimatedLogo
