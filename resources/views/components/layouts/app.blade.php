<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rukutun - {{ $title ?? 'na' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'na' }}" />
</head>

<body>

    <x-layouts.navegation />

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}

</body>

</html>
