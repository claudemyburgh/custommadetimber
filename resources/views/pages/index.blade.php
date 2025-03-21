<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>

    <x-hero.2/>

    <div class="wrapper py-20">
        <div class="flex -space-x-32">
            @foreach(range(1,10) as $item)
                <section class="border relative transition-all border-gray-950/10 bg-white shadow-lg hover:shadow-2xl rounded-lg min-w-[280px]">
                    <img class="aspect-[3/4] w-full object-cover" src="https://kzmg2278ifuylvolt1t0.lite.vusercontent.net/placeholder.svg?height=300&width=400" alt="">
                    <footer class="p-4">
                        <p class="text-lg tracking-tight font-semibold">Section {{ $item }}</p>
                    </footer>
                </section>
            @endforeach
        </div>

    </div>

</x-app-layout>
