@unless ($breadcrumbs->isEmpty())
	<!-- This example requires Tailwind CSS v2.0+ -->
	<nav class="flex py-4" aria-label="Breadcrumb">
		<ol role="list" class="flex items-center space-x-4">
			@foreach ($breadcrumbs as $breadcrumb)
				@if ($breadcrumb->url && !$loop->last)
					<li>
						<div>
							<a href="{{ $breadcrumb->url }}" wire:navigate.hover class="text-gray-400 hover:text-gray-500">
								@if($breadcrumb->title === 'Home')
									<!-- Heroicon name: solid/home -->
									<x-heroicon-s-home class="h-5 w-5 text-gray-400" aria-hidden="true"/>
									<span class="sr-only">{{ $breadcrumb->title }}</span>
								@else
									{{ $breadcrumb->title }}
								@endif
							</a>
						</div>
					</li>
				@else
					<li>
						<div class="flex items-center">
							<!-- Heroicon name: solid/chevron-right -->
							<span class="text-gray-400/50 ">{{ $breadcrumb->title }}</span>
						</div>
					</li>
				@endif

				@unless($loop->last)
					<li class="text-gray-500">
						<x-heroicon-s-chevron-right class="h-5 w-5 text-gray-400" aria-hidden="true"/>
					</li>
				@endif
			@endforeach

		</ol>
	</nav>

@endunless
