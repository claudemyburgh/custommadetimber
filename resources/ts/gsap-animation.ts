import gsap from "gsap"

document.addEventListener("livewire:navigated", function () {
    gsap.from(".animator", { opacity: 0, x: 110, duration: 0.5, stagger: 0.1, scrollTrigger: { trigger: ".animator" } })
})
