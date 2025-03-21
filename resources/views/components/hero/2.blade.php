<section class="w-full py-12 md:py-24 lg:py-32 relative overflow-clip">
    <img class="absolute inset-0 w-full object-cover -z-10 blur-lg" src="{{ Vite::asset('resources/img/corporate/01.webp') }}" alt="">
    <div class="wrapper">
        <div class="grid gap-6 lg:grid-cols-[1fr_400px] lg:gap-12 xl:grid-cols-[1fr_600px]">
            <div class="flex flex-col justify-center space-y-4">
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl xl:text-6xl/none">
                        Custom Made Timber
                    </h1>
                    <p class="max-w-[600px] text-muted-foreground md:text-xl">
                        Our platform helps businesses of all sizes streamline operations, increase efficiency, and drive growth.
                    </p>
                </div>
                <div class="flex flex-col gap-2 min-[400px]:flex-row">
                    <a href="#"
                       class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
                       disabled:opacity-50 disabled:pointer-events-none ring-offset-background bg-primary-500 text-white hover:bg-primary-500/90 h-11 px-8 py-2">
                        Get Started
                    </a>
                    <a href="#"
                       class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none ring-offset-background border border-input hover:bg-accent hover:text-accent-foreground h-11 px-8 py-2">
                        Watch Demo
                    </a>
                </div>
            </div>
            <div class="mx-auto aspect-video overflow-hidden rounded-xl  sm:w-full lg:aspect-square bg-gray-950 shadow-lg p-8 grid place-items-center">
                <img class="aspect-square size-2/3" src="{{ Vite::asset('resources/img/logo.svg') }}" alt="{{ config('app.name') }} logo">
            </div>

        </div>
    </div>
</section>
