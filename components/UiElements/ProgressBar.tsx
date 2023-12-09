"use client"

import { useEffect, useState } from "react"

const ProgressBar = () => {
  const [progress, setProgress] = useState(0)

  useEffect(() => {
    const intervale = setInterval(() => {
      setProgress((prevState: number) => (prevState >= 100 ? 0 : prevState + 10))
    }, 500)

    return () => {
      clearInterval(intervale)
    }
  }, [])

  return (
    <div aria-hidden={true} className={`bg-gray-800 h-1 text-2xl font-bold z-[2000] fixed top-0 inset-x-0 w-full`}>
      <div className={`bg-primary-500 h-1 w-0 transition-all duration-500 ease-out`} style={{ width: progress + "%" }}></div>
    </div>
  )
}

export default ProgressBar
