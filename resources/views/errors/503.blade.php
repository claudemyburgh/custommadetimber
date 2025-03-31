<!DOCTYPE html>

<html lang="en" class="h-full">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Custom Made Timber</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=albert-sans:100,200,200i,300,300i,400,500,600,700,800,900" rel="stylesheet"/>


    @vite(['resources/ts/app.ts', 'resources/css/app.css'])


</head>

<body class="bg-gray-900 text-gray-300 grid place-content-center h-full">

<div class="wrapper text-center">

    <h1 class="text-center text-6xl mb-4 font-black text-primary-500">503</h1>

    <h6 class="text-3xl ">Website is under maintenance</h6>

    <p>Contact Us: Coenie Marais
        <a class="text-primary-500 hover:underline" href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a> or
        <a class="text-primary-500 hover:underline" href="tel:{{ config('contact.phone_flat') }}">
            {{ config('contact.phone') }}</a>
    </p>

</div>

</body>

</html>
