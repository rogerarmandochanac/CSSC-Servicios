<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSSC</title>
    <link rel="stylesheet" href="{{ asset("css/base.css") }}">
    <link rel="stylesheet" href="{{ asset("css/navbar.css") }}">
    <link rel="stylesheet" href="{{ asset("css/header.css") }}">
    <link rel="stylesheet" href="{{ asset("css/servicios.css") }}">
</head>
<body>
    @include("navbar")
    @yield("encabezado")
    <div class="contenedor">
        @yield("contenedor")
    </div>
</body>
</html>