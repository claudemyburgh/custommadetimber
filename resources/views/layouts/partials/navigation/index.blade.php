<headless-navigation role="navigation" class=" bg-gray-950 fixed top-0 inset-x-0 z-40 flex flex-col items-center text-gray-300 min-h-16">
    <nav class="wrapper flex items-center justify-between py-4">
        <x-navigation.brand/>

        <div class="-mr-2 -my-2 md:hidden">
            <button
                aria-controls="mobile-toggle"
                aria-expanded="false"
                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500"
                type="button"
            >
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg aria-hidden="true" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </button>
        </div>

        <div class="hidden md:flex space-x-6">
            @foreach($menu as $link)
                <a wire:navigate.hover @class([
                    'hover:text-primary-500',
                    'font-medium text-primary-500 ' => request()->is($link->active),
                ])
                href="{{ route($link->route) }}">{{ $link->name }}</a>
            @endforeach
        </div>

    </nav>
    <div id="mobile-toggle" class="md:hidden w-full  p-2">
        @foreach($menu as $link)
            <a wire:navigate.hover @class([
                    'hover:text-primary-500 w-full flex px-4 py-2',
                    'font-medium text-primary-500 bg-gray-900 rounded-default' => request()->is($link->active),
                ])
            href="{{ route($link->route) }}">{{ $link->name }}</a>
        @endforeach
    </div>
</headless-navigation>
