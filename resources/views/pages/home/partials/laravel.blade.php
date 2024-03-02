@extends('pages.home.home')

@section('laravel')
    <section class="mx-auto py-8">
        <div class="mx-auto bg-gray-900 rounded-lg shadow-md p-8 mb-8 shadow-2xl">
            <p class="text-lg mb-4 text-gray-300">O Laravel é um framework PHP poderoso e elegante para desenvolvimento web.
            </p>
            <h2 class="text-xl font-bold mb-2 text-gray-300">Comandos Importantes do Laravel</h2>
            <ul class="text-gray-300">
                <li class="mb-4">
                    <p class="text-green-400">Executar migrations: configura a estrutura do banco de dados</p>
                    <div class="flex items-center">
                        <p class=""><code class="font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2">php
                                artisan migrate</code></p>
                        <button
                            class="bg-green-400 text-black text-center rounded-r-md px-4 h-8 hover:bg-green-500 focus:outline-none">Copiar</button>
                    </div>
                </li>
                <li class="mb-4">
                    <p class="text-green-400">Criar um arquivo migration</p>
                    <div class="flex items-center">
                        <p class=""><code class="font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2">php
                                artisan make:migration Nome_da_migration</code></p>
                        <button
                            class="bg-green-400 text-black text-center rounded-r-md px-4 h-8 hover:bg-green-500 focus:outline-none">Copiar</button>
                    </div>
                </li>
                <li class="mb-4">
                    <p class="text-green-400">Preencher o banco de dados com dados base ou teste</p>
                    <div class="flex items-center">
                        <p class=""><code class="font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2">php
                                artisan db:seed</code></p>
                        <button
                            class="bg-green-400 text-black text-center rounded-r-md px-4 h-8 hover:bg-green-500 focus:outline-none">Copiar</button>
                    </div>
                </li>
                <li class="mb-4">
                    <p class="text-green-400">Criar um arquivo Seed</p>
                    <div class="flex items-center">
                        <p class=""><code class="font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2">php
                                artisan make:seed Nome_da_seed</code></p>
                        <button
                            class="bg-green-400 text-black text-center rounded-r-md px-4 h-8 hover:bg-green-500 focus:outline-none">Copiar</button>
                    </div>
                </li>
            </ul>
        </div>
        <p class="text-lg text-center text-gray-300">Pronto para começar? Consulte a <a href="https://laravel.com/docs"
                class="text-blue-500 hover:underline">documentação oficial do Laravel</a> e comece a construir aplicativos
            incríveis!</p>
    </section>
@endsection
