<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire String CLass Bug</title>
</head>
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles

<body>
    {{ $breadcrumbs ?? null }}
    {{ $slot }}
    @livewireScripts
</body>

</html>
