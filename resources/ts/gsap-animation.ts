import gsap from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"

gsap.registerPlugin(ScrollTrigger)
document.addEventListener("livewire:navigated", function () {
    gsap.from(".animator", { opacity: 0, x: 110, duration: 0.5, stagger: 0.1, scrollTrigger: { trigger: ".animator" } })

    gsap.from(".gsap-animate-up", {
        opacity: 0,
        y: 150,
        // scale: 0.5,
        stagger: 0.05,
        duration: 1,
        scrollTrigger: {
            trigger: ".gallery",
            start: "top center",
            end: "top 20%",
            markers: false,
            // scrub: true,
        },
    })
})
