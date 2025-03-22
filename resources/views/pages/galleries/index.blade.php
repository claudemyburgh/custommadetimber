<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>

    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('galleries') }}
    </x-slot:breadcrumbs>

    <x-sections.top-of-page>
        <h1 class="text-3xl font-bold mb-6">Gallery</h1>
        <div class="max-w-2xl">
            <x-timeline.1 :data="$galleries" route="galleries.show">

            </x-timeline.1>
        </div>
    </x-sections.top-of-page>


</x-app-layout>

