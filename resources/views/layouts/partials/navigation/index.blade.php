<nav class=" bg-gray-950 fixed top-0 inset-x-0 z-40 flex items-center text-gray-300 min-h-14">
    <div class="wrapper flex items-center justify-between ">
        <x-navigation.brand/>

        <div class="hidden md:flex space-x-6">
            @foreach($menu as $link)
                <a wire:navigate.hover @class([
                    'hover:text-primary-500',
                    'font-medium text-primary-500' => request()->is($link->active),
                ])
                href="{{ route($link->route) }}">{{ $link->name }}</a>
            @endforeach

        </div>
    </div>
</nav>
