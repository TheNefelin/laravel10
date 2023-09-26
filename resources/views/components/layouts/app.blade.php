<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukutun - {{ $title ?? 'na' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'na' }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-blue-50">

    <x-layouts.navegation />

    @if (session('status'))
        <div class=" bg-lime-600 text-white p-2">
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}

</body>

</html>
