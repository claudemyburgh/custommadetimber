<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('contact') }}
    </x-slot:breadcrumbs>
    <div class="wrapper py-20">
        <h1 class="text-3xl font-bold mb-6">Contact Us</h1>
        <div class="grid md:grid-cols-2 gap-6">
            <livewire:contact-form/>
            <div class="space-y-4">
                <x-contact.info/>
                <x-contact.opening-hours/>
            </div>
        </div>
    </div>
</x-app-layout>
