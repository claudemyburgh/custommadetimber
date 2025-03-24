<section class="w-full py-12 md:py-2 2xl:py-36  relative overflow-clip">
    <img class="absolute inset-0 w-full object-cover -z-10 blur" src="{{ Vite::asset('resources/img/corporate/01.webp') }}" alt="">
    <div class="wrapper">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-12 ">
            <div class="flex flex-col justify-center space-y-4">
                <div class="space-y-2">
                    <h1 class="text-3xl animator font-bold tracking-tighter sm:text-5xl xl:text-6xl/none">
                        Custom Made Timber
                    </h1>
                    <p class="max-w-[600px] animator text-muted-foreground md:text-xl">
                        Our mission is to craft exceptional, bespoke timber solutions that blend functionality with artistry, creating spaces that inspire and endure.</p>
                </div>
                <div class="flex flex-col gap-2 min-[400px]:flex-row">
                    <a wire:navigate.hover href="{{ route('contact-us') }}"
                       class="inline-flex animator items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
                       disabled:opacity-50 disabled:pointer-events-none ring-offset-background bg-primary-500 text-white hover:bg-primary-500/90 h-11 px-8 py-2">
                        Contact Us
                    </a>
                    <a wire:navigate.hover href="{{ route('galleries.index') }}"
                       class="inline-flex animator items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
                       disabled:opacity-50 disabled:pointer-events-none ring-offset-background border border-input hover:bg-accent hover:text-accent-foreground h-11 px-8 py-2">
                        View Gallery
                    </a>
                </div>
            </div>
            <div class="p-16 2xl:p-4">
                <div class="mx-auto aspect-video overflow-hidden rounded-xl m-8 sm:w-full lg:aspect-square bg-gray-950 shadow-lg  grid place-items-center">
                    <img class="aspect-square animator size-2/3" src="{{ Vite::asset('resources/img/logo.svg') }}" alt="{{ config('app.name') }} logo">
                </div>
            </div>
        </div>
    </div>
</section>
