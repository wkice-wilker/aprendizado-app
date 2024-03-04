@extends('app')

@section('home-page')
    <header class="bg-gray-900 text-gray-300 p-4 absolute top-0 w-full">
        <nav class="mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Aprendizado</a>
            <ul class="gap-8 hidden md:flex">
                <li @if (request()->is('Docker')) class="text-green-400" @endif><a href="/Docker"
                        class="hover:text-green-400">Docker</a></li>
                <li @if (request()->is('Laravel')) class="text-green-400" @endif><a href="/Laravel"
                        class="hover:text-green-400">Laravel</a></li>
                <li @if (request()->is('Arquitetura')) class="text-green-400" @endif><a href="/Arquitetura"
                        class="hover:text-green-400">Arquitetura</a></li>
                <li @if (request()->is('Metodos')) class="text-green-400" @endif><a href="/Metodos"
                        class="hover:text-green-400">Banco de dados</a></li>
            </ul>
            <div class="gap-8 hidden md:flex">
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
@endsection
