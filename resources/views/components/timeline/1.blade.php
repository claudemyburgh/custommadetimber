@props([
    'data',
    'route',
    'date' => 'created_at'
])

<div class="relative">
    <div aria-hidden="true" class="absolute w-px h-full bg-gray-50/50 left-4 md:left-28"></div>
    <ul class="space-y-4 ml-8 md:ml-32">
        @foreach($data as $item)
            <li class="relative isolate p-6 flex flex-col rounded-default bg-white border border-gray-50/50 space-y-2">
                <div class="size-3 absolute -left-[23px] shadow shadow-black/50 top-10 bg-white border border-primary-500 rounded-default"></div>
                <h2 class="font-bold text-lg">
                    {{ $item->title }}
                </h2>
                {{ $slot }}
                <time class="md:absolute md:top-7 text-left md:text-right text-sm  w-1/3 text-primary-500 md:-left-[13.5rem]"
                      datetime="{{ $item->created_at }}">
                    {{  $item[$date]->diffForHumans() }}
                </time>
                <p class="text-gray-300">
                    {{  Str::limit($item["description"], 100) }}
                </p>

                <a wire:navigate.hover href="{{ route($route, $item) }}" class="hover:text-primary">
                    View
                    <span class="absolute inset-0 rounded-default bg-transparent hover:bg-gray-50/20 scale-75 hover:scale-100 transition-all"></span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
