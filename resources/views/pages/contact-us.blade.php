<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('contact') }}
    </x-slot:breadcrumbs>

    <x-sections.top-of-page>
        <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <x-contact.info/>
                <x-contact.opening-hours/>
            </div>
            <livewire:contact-form/>
        </div>
    </x-sections.top-of-page>


</x-app-layout>
