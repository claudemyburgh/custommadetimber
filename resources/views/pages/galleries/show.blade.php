<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('gallery', $gallery) }}
    </x-slot:breadcrumbs>

    <x-sections.top-of-page>
        <h1 class="text-3xl font-bold mb-6">{{ $gallery->title }}</h1>
        <div class="prose">
            @markdown($gallery->description)
        </div>

    </x-sections.top-of-page>


</x-app-layout>

