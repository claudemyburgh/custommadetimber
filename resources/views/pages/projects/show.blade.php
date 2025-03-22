<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('project', $project) }}
    </x-slot:breadcrumbs>
    <x-sections.top-of-page>
        <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">{{ $project->title }}</h1>
            <div class="prose">
                @markdown($project->description)
            </div>
        </div>
    </x-sections.top-of-page>
</x-app-layout>
