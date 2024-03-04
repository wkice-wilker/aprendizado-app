@extends('pages.home.home')

@section('laravel')
    <article class="mx-2 md:mx-8 p-2 md:p-8 bg-gray-900 rounded-lg shadow-md shadow-2xl">

        <h2 class="text-center text-5xl font-bold mb-2 text-red-800">Laravel</h2>
        <section>
            <p class="text-lg mb-4 text-gray-300">
                O Laravel é um framework PHP poderoso, dinâmico e com uma sintaxe expressiva e elegante. Ele oferece
                uma série de ferramentas e serviços que ajudam a criar aplicativos robustos e escaláveis. O Laravel
                é uma escolha popular entre desenvolvedores devido à sua simplicidade e facilidade de uso.
            </p>
            <p class="text-lg mb-4 text-gray-300">
                Embora em muitos aspectos seja altamente personalizável em sua implementação e construção, o Laravel
                oferece uma quantidade significativa de funcionalidades internas (helpers, classes, métodos, etc.) que
                facilitam a vida do desenvolvedor. No entanto, como em toda linguagem de programação, é necessário um
                tempo de aprendizado e prática para se tornar um desenvolvedor eficiente, com boas práticas, capaz de
                construir aplicações de qualidade, seguras e escaláveis.
            </p>
        </section>
        <h2 class="text-3xl font-bold my-4 text-gray-300">Observe nosso compilado de comandos úteis para estrutura e
            desenvolvimento:</h2>
        <section>
            <div class="px-2 py-4 border border-gray-500 rounded-md">
                <h3 class="text-2xl underline font-bold mb-2 text-gray-300">Funcionamento</h3>
                <p class="text-lg mb-4 text-gray-300">
                    Toda aplicação é composta por uma série de arquivos e diretórios que trabalham juntos para o seu
                    funcionamento.
                    O Laravel segue o padrão MVC (Model-View-Controller), que é uma forma de organizar o código da
                    aplicação. Embora
                    este projeto não siga essa abordagem e sim um outro modelo estrutural, o SOLID (clique aqui para saber
                    mais sobre
                    SOLID neste projeto), iremos explorar a maioria das funcionalidades do Laravel, garantindo que as
                    interações dos
                    arquivos sejam funcionais, eficientes e seguras.
                </p>
                <h4 class="text-2xl underline font-bold mb-2 text-gray-300 text-center">Visão geral:</h4>
                <h5 class="text-xl underline font-bold mb-2 text-gray-300">Roteamento:</h5>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <p class="text-green-400">Diretório:</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>├raiz (./)
├── routes/
├──├── web.php</code></pre>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Tipos de requisições:</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>Route::get(); Route::post(); Route::put(); Route::delete(); Route::patch();</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Realizando uma requisição que passará por um processo:</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>Route::get('/user', [UserController::class, 'metodo']);</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Realizando uma requisição que retornará uma página:</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>Route::get('/rota', function () {
return view('nome_da_view');
    });</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Utilizando Middleware:</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>Route::get('/profile', function () {
    // ...
})->middleware(Authenticate::class);
                                </code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>Route::get('/', function () {
    // ...
})->middleware([First::class, Second::class]);</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/', function () {
        // ...
    })->withoutMiddleware([EnsureTokenIsValid::class]);

    Route::get('/profile', function () {
        // ...
    });
});</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="px-2 py-4 border border-gray-500 rounded-md">
                <h3 class="text-2xl underline font-bold mb-2 text-gray-300">Banco de Dados</h3>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <p class="text-green-400">Executando a(as) migration(s) para configurar a estrutura do
                            banco de
                            dados</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>php artisan migrate</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Criar um arquivo migration</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>php artisan make:migration Nome_da_migration</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Preencher o banco de dados com dados base ou teste</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>php artisan db:seed</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Criar um arquivo Seed</p>
                        <div class="flex flex-col">
                            <div class="relative">
                                <pre
                                    class="w-full overflow-hidden font-medium bg-gray-800 text-gray-400 rounded-lg p-2 my-2 text-nowrap text-ellipsis pr-10"><code>php artisan make:seed Nome_da_seed</code></pre>
                                <button
                                    class="absolute top-2 right-0 text-black text-center rounded-md px-4 h-10 cursor-pointer transition-colors duration-300 focus:bg-green-500"><i
                                        class="fa-regular fa-copy text-gray-300"></i></button>
                            </div>
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
