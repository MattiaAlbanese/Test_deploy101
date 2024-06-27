<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Coalescing operator --}}
    <title>{{ $titolo ?? 'Nome sito'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- TAG AUTOCONCLUSIVO --}}
    <x-navbar/>

    <div class="min-vh-100">
        {{ $slot }}
    </div>

    <x-footer/>
</body>

</html>