<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendizado</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800">
    <header class="bg-gray-900 text-gray-300 py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Aprendizado</a>
            <ul class="flex gap-8">
                <li @if(request()->is('Docker')) class="text-green-400" @endif><a href="/Docker" class="hover:text-green-400">Docker</a></li>
                <li @if(request()->is('Laravel')) class="text-green-400" @endif><a href="/Laravel" class="hover:text-green-400">Laravel</a></li>
                <li @if(request()->is('Arquitetura')) class="text-green-400" @endif><a href="/Arquitetura" class="hover:text-green-400">Arquitetura</a></li>
                <li @if(request()->is('Metodos')) class="text-green-400" @endif><a href="/Metodos" class="hover:text-green-400">Métodos</a></li>
            </ul>
            <div class="flex gap-8">
                <a href="#" class="hover:text-green-400 py-2 px-4 bg-gray-800 rounded-md">Login</a>
                <a href="#" class="hover:text-green-400 py-2 px-4 bg-gray-800 rounded-md">Registro</a>
            </div>
        </nav>
    </header>
    @yield('home')
    @yield('docker')
    @yield('laravel')
    @yield('arquitetura')
    @yield('metodos')
</body>
</html>
