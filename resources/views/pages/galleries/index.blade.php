<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>

    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('galleries') }}
    </x-slot:breadcrumbs>
    <div class="wrapper py-20">
        <h1 class="text-3xl font-bold mb-6">Gallery Index</h1>
        <div class="space-y-2">
            @foreach($galleries as $gallery)
                <div>
                    <a wire:navigate.hover href="{{ route('galleries.show', $gallery) }}" class="hover:underline">
                        {{ $gallery->title }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

