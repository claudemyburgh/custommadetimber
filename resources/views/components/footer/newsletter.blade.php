<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
    <div class="lg:col-span-1">
        <a wire:navigate.hover href="{{ route('home') }}" class="inline-flex items-center space-x-2 mb-4">
            <div class="w-10 h-10 bg-primary-500 rounded-full flex items-center justify-center">
                <span class="text-white font-bold">CMT</span>
            </div>
            <span class="font-bold text-xl text-white">{{ config('app.name') }}</span>
        </a>
        <p class="text-gray-400 mb-4 max-w-sm">
            We're on a mission to build the best platform for our customers. Join us on this journey.
        </p>
        <div class="flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                </svg>
                <span class="sr-only">LinkedIn</span>
            </a>
        </div>
    </div>
</div>
