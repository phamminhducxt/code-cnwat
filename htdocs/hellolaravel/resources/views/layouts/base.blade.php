<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Demo Laravel CRUD app</title>
    @vite(['resources/sass/app.scss'])
    @vite(['resources/sass/modal.scss'])
</head>

<body>
    <div class="container"> @yield('main') </div>
    @vite(['resources/js/app.js'])
</body>

</html>