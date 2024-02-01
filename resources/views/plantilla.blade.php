<!-- resources/views/plantilla.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>@yield('titulo')</title>
   
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <header>
        <!-- Aquí podrías incluir el contenido de la cabecera -->
    </header>

    <nav>
        @include('partials.nav')
    </nav>

    <main>
        @yield('contenido')
    </main>
</body>
</html>
