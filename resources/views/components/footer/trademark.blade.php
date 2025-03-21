<div class="flex flex-col md:flex-row justify-between items-center pt-8">
    <p class="text-sm text-gray-400 mb-4 md:mb-0">
        © {{ now()->year }} {{ config('app.name') }}. All rights reserved.
    </p>
    <div class="flex flex-wrap gap-4 text-sm text-gray-400">
        <a wire:navigate.hover href="{{ route('privacy-policy') }}" class="hover:text-white transition-colors">
            Privacy Policy
        </a>
        <span class="text-gray-600">•</span>
        <a wire:navigate.hover href="{{ route('terms-of-service') }}" class="hover:text-white transition-colors">
            Terms of Service
        </a>
        <span class="text-gray-600">•</span>
        <a wire:navigate.hover href="{{ route('cookie-policy') }}" class="hover:text-white transition-colors">
            Cookie Policy
        </a>
    </div>
</div>
