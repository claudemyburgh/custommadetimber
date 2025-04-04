import { defineConfig } from "vite"
import laravel, { refreshPaths } from "laravel-vite-plugin"

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/ts/app.ts"],
            refresh: [...refreshPaths, "app/Livewire/**"],
        }),
    ],
})
