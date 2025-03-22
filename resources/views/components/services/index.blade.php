@php
    $services = collect([
        [
            'title' => 'Custom Carpentry',
            'description' => "Bring your ideas to life with our expert craftsmanship. Whether it's bespoke furniture, architectural woodwork, or custom-built installations, we create high-quality, tailor-made pieces designed to suit your style and needs.",
            'icon' => ''
        ],
        [
            'title' => 'Furniture Restoration',
            'description' => "Preserve the charm and character of your treasured furniture with our professional restoration services. From antique refinishing to structural repairs, we breathe new life into well-loved pieces, ensuring they remain beautiful and functional for years to come.",
            'icon' => ''
        ],
        [
            'title' => 'Cabinetry and Installation',
            'description' => "Upgrade your home or workspace with sleek, custom cabinetry designed for both style and practicality. Our expert team handles everything from design to installation, ensuring seamless integration and
            superior quality that enhances your space.",
            'icon' => ''
        ],
        [
            'title' => 'Door and Window Installation',
            'description' => "Enhance your property’s curb appeal, security, and energy efficiency with our high-quality door and window installation services. Whether you need elegant wooden doors, custom window frames, or modern upgrades, we provide durable, stylish solutions tailored to your needs.",
            'icon' => ''
        ],
        [
            'title' => 'Decking and Outdoor Structures',
            'description' => "Transform your outdoor area into a functional and inviting retreat with our premium decking and timber structures. From patios and pergolas to gazebos and custom-built outdoor furniture, we create beautiful, long-lasting spaces perfect for relaxation and entertaining.",
            'icon' => ''
        ],
        [
            'title' => 'Interior Trim and Moulding',
            'description' => "Add the perfect finishing touch to your interiors with finely crafted trim and moulding. Whether it’s crown moulding, wainscoting, or decorative woodwork, our attention to detail ensures an elegant, cohesive look that enhances your home’s character and value.",
            'icon' => ''
        ],
])
@endphp

<section class="relative">
    <svg aria-hidden="true" id="dbc-svg-aed118f0-7d4c-4518-a929-0dc043f5e2bc" class="dbc-svg absolute inset-0 -z-10 text-gray-50/10" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
            <pattern id="dbc-pattern-aed118f0-7d4c-4518-a929-0dc043f5e2bc" width="50" height="50" x="0" y="0" patternTransform="rotate(0) skewX(0) scale(1)" patternUnits="userSpaceOnUse">
                <rect width="50" height="50" fill="none" stroke="currentColor" stroke-width="1.5" rx="10"/>
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#dbc-pattern-aed118f0-7d4c-4518-a929-0dc043f5e2bc)"/>
    </svg>
    <div class="py-24 wrapper grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 lg:gap-8 ">
        @foreach($services  as $service)
            <div class="rounded-default relative z-10 space-x-2 md:space-x-4 lg:space-x-6 flex -rotate-3">
                <div class="flex flex-col items-center">
                    <div class="size-24 shrink-0 bg-gray-50 rounded-default ">

                    </div>
                    <div class="w-px h-full bg-gradient-to-b from-gray-50 to-transparent"></div>
                </div>

                <div class="space-y-2">
                    <p class="text-xl md:text-2xl lg:text-3xl font-bold  tracking-tig2">{{ $service['title'] }}</p>
                    <p class="text-gray-300">{{ $service['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
