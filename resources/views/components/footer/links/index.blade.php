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
        <h3 class="text-sm font-medium uppercase tracking-wider text-white">Support</h3>
        <nav class="flex flex-col space-y-2">
            <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">
                Help Center
            </a>
            <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">
                Contact Us
            </a>
            <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">
                Community
            </a>
            <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">
                Status
            </a>
        </nav>
    </div>
    <div class="space-y-3">
        <h3 class="text-sm font-medium uppercase tracking-wider text-white">Legal</h3>
        <nav class="flex flex-col space-y-2">
            <a wire:navigate.hover href="{{ route('privacy-policy') }}"
                @class([
                     'text-sm text-gray-400 hover:text-white transition-colors',
                     'font-medium text-primary-500' => request()->routeIs('privacy-policy'),
             ])>
                Privacy Policy
            </a>
            <a wire:navigate.hover href="{{ route('terms-of-service') }}" @class([
                    'text-sm text-gray-400 hover:text-white transition-colors',
                    'font-medium text-primary-500' => request()->routeIs('terms-of-service'),
            ])>
                Terms of Service
            </a>
            <a wire:navigate.hover href="{{ route('cookie-policy') }}" @class([
                    'text-sm text-gray-400 hover:text-white transition-colors',
                    'font-medium text-primary-500' => request()->routeIs('cookie-policy'),
            ])>
                Cookie Policy
            </a>

        </nav>
    </div>
    <div class="space-y-3">
        <h3 class="text-sm font-medium uppercase tracking-wider text-white">Contact</h3>
        <div class="space-y-2">
            <div class="flex items-start space-x-2">
                <x-heroicon-s-map-pin class="h-5 w-5 text-gray-400 mt-0.5"/>
                <span class="text-sm text-gray-400">{{ config('contact.address') }}</span>
            </div>
            <div class="flex items-start space-x-2">
                <x-heroicon-s-phone class="h-4 w-4 text-gray-400 mt-0"/>
                <span class="text-sm text-gray-400">{{ config('contact.phone')  }}</span>
            </div>
            <div class="flex items-start space-x-2">
                <x-heroicon-s-envelope class="h-5 w-5 text-gray-400 mt-0.5"/>
                <span class="text-sm text-gray-400">{{ config('contact.email')  }}</span>
            </div>
        </div>
    </div>
</div>
