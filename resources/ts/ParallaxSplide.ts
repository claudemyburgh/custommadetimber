import Splide from "@splidejs/splide"
import "@splidejs/splide/dist/css/themes/splide-default.min.css"

// Define configuration interface
interface ParallaxOptions {
    speed?: number
    strength?: number
    direction?: "x" | "y"
}

// Initialize Splide with Parallax Effect
export default class ParallaxSplide {
    private splide: Splide
    private readonly strength: number
    private readonly direction: "x" | "y"

    constructor(selector: string, options: ParallaxOptions = {}) {
        const { speed = 400, strength = 30, direction = "x" } = options

        this.splide = new Splide(selector, {
            type: "loop",
            perPage: 1,
            focus: "center",
            autoplay: true,
            speed: speed,
        })

        this.strength = strength
        this.direction = direction

        this.splide.mount()
        this.splide.on("move", (newIndex) => this.applyParallax(newIndex))
    }

    private applyParallax(newIndex: number) {
        document.querySelectorAll<HTMLImageElement>(".parallax-img").forEach((img, index) => {
            const movement = (index - newIndex) * this.strength
            img.style.transform = this.direction === "x" ? `translateX(${movement}px)` : `translateY(${movement}px)`
        })
    }
}
