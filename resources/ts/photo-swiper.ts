import PhotoSwipeLightbox from "photoswipe/lightbox"
import "photoswipe/style.css"

document.addEventListener("livewire:navigated", function () {
    const lightbox = new PhotoSwipeLightbox({
        gallery: "#gallery",
        children: "a",
        pswpModule: () => import("photoswipe"),
    })
    lightbox.init()
})
