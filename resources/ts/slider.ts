import "@splidejs/splide/dist/css/themes/splide-default.min.css"
import Splide from "@splidejs/splide"

document.addEventListener("livewire:navigated", function () {
    // Initialize Main Carousel
    const mainSplide = new Splide("#main-carousel", {
        type: "fade", // Infinite loop mode
        perPage: 1,
        autoplay: true,
        speed: 1000,
        pagination: false,
        arrows: false,
    }).mount()

    // Initialize Thumbnail Carousel
    const thumbSplide = new Splide("#thumbnail-carousel", {
        fixedWidth: 140, // Thumbnail width
        fixedHeight: 200, // Thumbnail height
        isNavigation: true,
        focus: 0, // Ensure first position focus
        pagination: false,
        gap: 10,
        type: "loop",
        rewind: true, // Enables looping
        cover: true,
        breakpoints: {
            640: { fixedWidth: 60, fixedHeight: 45 },
        },
    }).mount()

    mainSplide.sync(thumbSplide)
})
