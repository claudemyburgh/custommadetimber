<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
    <div class="lg:col-span-1">
        <a wire:navigate.hover href="{{ route('home') }}" class="inline-flex items-center space-x-2 mb-4">
            <img loading="lazy" class="h-10 w-auto" src="{{ Vite::asset("resources/img/long-logo.svg") }}" alt="footer logo">
            <span class="sr-only">{{ config('app.name') }}</span>
        </a>
        <p class="text-gray-400 mb-4 max-w-sm">
            Our mission is to craft exceptional, bespoke timber solutions that blend functionality with artistry, creating spaces that inspire and endure.
        </p>
        <div class="flex space-x-4">
            @foreach(config('social') as $social)
                <a href="{{ $social['url'] }}" target="_blank" class="text-gray-400 hover:text-white transition-colors">
                    {!! $social['icon'] !!}
                    <span class="sr-only">{{ $social['name'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</div>
