@extends('pages.home.home')

@section('laravel')
    <article class="mx-8 p-8 bg-gray-900 rounded-lg shadow-md shadow-2xl">

        <h2 class="text-center text-5xl font-bold mb-2 text-red-800">Laravel</h2>
        <section>
            <p class="text-lg mb-4 text-gray-300 text-pretty">
                O Laravel é um framework PHP poderos, dinâmico e com uma sintaxe expressiva e elegante. Ele
                oferece uma série de ferramentas e serviços que ajudam a criar aplicativos robustos e escaláveis. O
                Laravel
                é uma escolha popular entre desenvolvedores devido à sua simplicidade e facilidade de uso.
            </p>
            <p class="text-lg mb-4 text-gray-300 text-pretty">
                Embora de muitas formas possa ser personalizável o seu manejo e construção, o Laravel oferece uma
                quantidade significativa
                de funcionalidades internas (helpers, classes, métodos, etc) que facilitam a vida do desenvolvedor.
                Mesmo assim, como
                toda linguagem de programação, é necessário um tempo de aprendizado e prática para se tornar um
                desenvolvedor eficiente, com
                boas práticas e que consiga construir aplicações de qualidade, seguras e escaláveis.
            </p>
        </section>
        <h2 class="text-3xl font-bold my-4 text-gray-300">Observe nosso compilado de comandos úteis para estrutura e
            desenvolvimento:</h2>
        <section>
            <div class="px-2 py-4 border border-gray-500 rounded-md">
                <h3 class="text-2xl underline font-bold mb-2 text-gray-300">Banco de Dados</h2>
                    <ul class="text-gray-300">
                        <li class="mb-4">
                            <p class="text-green-400">Executar migrations: configura a estrutura do banco de dados</p>
                            <div class="flex items-center">
                                <p
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2 text-nowrap text-ellipsis">
                                    php artisan migrate</p>
                                <button
                                    class="bg-green-400 text-black text-center rounded-r-md px-4 h-10 hover:bg-green-500 focus:outline-none"><i
                                        class="fa-regular fa-copy"></i></button>
                            </div>
                        </li>
                        <li class="mb-4">
                            <p class="text-green-400">Criar um arquivo migration</p>
                            <div class="flex items-center">
                                <p
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2 text-nowrap text-ellipsis">
                                    php artisan make:migration Nome_da_migration</p>
                                <button
                                    class="bg-green-400 text-black text-center rounded-r-md px-4 h-10 hover:bg-green-500 focus:outline-none"><i
                                        class="fa-regular fa-copy"></i></button>
                            </div>
                        </li>
                        <li class="mb-4">
                            <p class="text-green-400">Preencher o banco de dados com dados base ou teste</p>
                            <div class="flex items-center">
                                <p
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2 text-nowrap text-ellipsis">
                                    php artisan db:seed</p>
                                <button
                                    class="bg-green-400 text-black text-center rounded-r-md px-4 h-10 hover:bg-green-500 focus:outline-none"><i
                                        class="fa-regular fa-copy"></i></button>
                            </div>
                        </li>
                        <li class="mb-4">
                            <p class="text-green-400">Criar um arquivo Seed</p>
                            <div class="flex items-center">
                                <p
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-l-lg p-2 text-nowrap text-ellipsis">
                                    php artisan make:seed Nome_da_seed</p>
                                <button
                                    class="bg-green-400 text-black text-center rounded-r-md px-4 h-10 hover:bg-green-500 focus:outline-none"><i
                                        class="fa-regular fa-copy"></i></button>
                            </div>
                        </li>
                    </ul>
            </div>
        </section>
    </article>
    <p class="text-lg text-center text-gray-300">
        Pronto para começar? Consulte a
        <a href="https://laravel.com/docs" class="text-blue-500 hover:underline">
            documentação oficial do Laravel
        </a> e comece a construir aplicativos incríveis!
    </p>
@endsection
