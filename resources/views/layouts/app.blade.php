<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    @production
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || []
                w[l].push({
                    "gtm.start":
                        new Date().getTime(), event: "gtm.js",
                })
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != "dataLayer" ? "&l=" + l : ""
                j.async = true
                j.src =
                    "https://www.googletagmanager.com/gtm.js?id=" + i + dl
                f.parentNode.insertBefore(j, f)
            })(window, document, "script", "dataLayer", '{{ config('google.gtag.id') }}')</script>
    @endproduction
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    {{ $seo  }}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=albert-sans:100,200,200i,300,300i,400,500,600,700,800,900" rel="stylesheet"/>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @livewireStyles
    @filamentStyles
</head>
<body class="font-sans bg-white text-gray-900 antialiased h-full selection:bg-primary-200 selection:text-primary-700">
@production
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{ config('google.gtag.id') }}"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
@endproduction
<x-navigation/>

<div class="wrapper mt-14">
    {{ $breadcrumbs ?? null }}
</div>


<main id="main">
    {{ $slot }}
</main>
<x-footer/>

@livewire('notifications')
@livewireScripts
@filamentScripts
</body>
</html>
