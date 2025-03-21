<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('gallery', $gallery) }}
    </x-slot:breadcrumbs>
    <div class="wrapper py-20">
        <h1 class="text-3xl font-bold mb-6">{{ $gallery->title }}</h1>
        <div>
            {{ $gallery->description }}
        </div>
    </div>
</x-app-layout>

