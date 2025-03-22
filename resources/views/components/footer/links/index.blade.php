<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4  gap-8 py-8 border-t border-b border-gray-800">
    <div class="space-y-3">
        <h3 class="text-sm font-medium uppercase tracking-wider text-white">Company</h3>
        <nav class="flex flex-col space-y-2">
            @foreach($menu as $link)
                <a wire:navigate.hover href="{{ route($link->route) }}" @class([
                    'text-sm text-gray-400 hover:text-white transition-colors',
                    'font-medium text-primary-500' => request()->routeIs($link->route),
            ])>
                    {{ $link->name }}
                </a>
            @endforeach

        </nav>
    </div>

    <div class="space-y-3">
        <h3 class="text-sm font-medium uppercase tracking-wider text-white">Social Media</h3>
        <nav class="flex flex-col space-y-2">
            @foreach(config('social') as $social)
                <a target="_blank" href="{{ $social['url'] }}" class="text-sm text-gray-400 flex items-center space-x-2 hover:text-white transition-colors">
                    <span class="text-whie">
                        {!! $social['icon'] !!}
                    </span>
                    <span>{{ $social['name'] }}</span>
                </a>
            @endforeach
        </nav>
    </div>
    <div class="space-y-3">
        <h3 class="text-sm font-medium uppercase tracking-wider text-white">Legal</h3>
        <nav class="flex flex-col space-y-2">
            <a wire:navigate.hover href="{{ route('privacy-policy') }}"
                @class([
                     'text-sm text-gray-400 hover:text-white transition-colors',
                     'font-medium text-primary-500' => request()->is('privacy-policy'),
             ])>
                Privacy Policy
            </a>
            <a wire:navigate.hover href="{{ route('terms-of-service') }}" @class([
                    'text-sm text-gray-400 hover:text-white transition-colors',
                    'font-medium text-primary-500' => request()->is('terms-of-service'),
            ])>
                Terms of Service
            </a>
            <a wire:navigate.hover href="{{ route('cookie-policy') }}" @class([
                    'text-sm text-gray-400 hover:text-white transition-colors',
                    'font-medium text-primary-500' => request()->is('cookie-policy'),
            ])>
                Cookie Policy
            </a>

        </nav>
    </div>
    <div class="space-y-3 col-span-2 md:col-span-1">
        <h3 class="text-sm font-medium uppercase tracking-wider text-white">Contact</h3>
        <div class="space-y-2">
            <a target="_blank" href="{{ config('social.google.url') }}" class="flex items-start space-x-2">
                <x-heroicon-s-map-pin class="h-5 w-5 text-gray-400 mt-0.5 shrink-0"/>
                <span class="text-sm text-gray-400 hover:text-white transition-colors">{{ config('contact.address') }}</span>
            </a>
            <a target="_blank" href="tel:{{config('contact.phone_flat')}}" class="flex items-start space-x-2">
                <x-heroicon-s-phone class="h-4 w-4 text-gray-400 mt-0 shrink-0"/>
                <span class="text-sm text-gray-400 hover:text-white transition-colors">{{ config('contact.phone')  }}</span>
            </a>
            <a target="_blank" href="mailto:{{config('contact.email')}}" class="flex items-start space-x-2">
                <x-heroicon-s-envelope class="h-5 w-5 text-gray-400 mt-0.5 shrink-0"/>
                <span class="text-sm text-gray-400 hover:text-white transition-colors">{{ config('contact.email')  }}</span>
            </a>
        </div>
    </div>
</div>
