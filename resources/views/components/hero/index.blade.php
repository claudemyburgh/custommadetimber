@php
    $slides = collect([
        [
            'title' => 'Residential Projects',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur cupiditate delectus deleniti deserunt, doloribus eligendi labore maxime
            molestiae necessitatibus, odit quasi quibusdam sapiente sed sequi suscipit temporibus totam velit.',
            'image' => 'resources/img/residential/06.webp',
        ],
        [
            'title' => 'Commercial Projects',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur cupiditate delectus deleniti deserunt, doloribus eligendi labore maxime
            molestiae necessitatibus, odit quasi quibusdam sapiente sed sequi suscipit temporibus totam velit.',
            'image' => 'resources/img/residential/05.webp',
        ],
        [
            'title' => 'Storefront Projects',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consectetur cupiditate delectus deleniti deserunt, doloribus eligendi labore maxime
            molestiae necessitatibus, odit quasi quibusdam sapiente sed sequi suscipit temporibus totam velit.',
            'image' => 'resources/img/residential/01.webp',
        ],
    ]);

@endphp

<header class="relative w-full min-h-screen bg-gray-300 overflow-clip">
    <x-hero.slider>
        @foreach($slides as $slide)
            <x-hero.slider.slide :image="$slide['image']" :title="$slide['title']" :text="$slide['text']"/>
        @endforeach


    </x-hero.slider>

    <x-hero.thumbnail>
        @foreach($slides as $slide)
            <x-hero.thumbnail.slide :image="$slide['image']"/>
        @endforeach
    </x-hero.thumbnail>


</header>
