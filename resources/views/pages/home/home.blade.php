@extends('app')

@section('home-page')
<header class="bg-gray-900 text-gray-300 p-4 fixed top-0 w-full">
    <nav class="mx-auto flex justify-between items-center w-full px-4">
        <div class="flex items-center s">
            <!-- Imagem da cidade -->
            <img src="{{asset('../images/svg/dev/develop-in-desktop.svg')}}" alt="dev-login-image" class="w-[5%]">
            <a href="/" class="text-2xl font-bold text-green-400 ml-3">Caraguatatuba</a>

            <!-- Links de navegação -->
            <ul class="flex gap-8 divide-x ml-20 pace-x-5">
                <li @if (request()->is('Livros')) class="text-green-400" @endif>
                    <a href="/Livros" class="hover:text-green-400 transition-colors duration-300">Livros</a>
                </li>
                <li @if (request()->is('Doacoes')) class="text-green-400" @endif>
                    <a href="/Doacoes" class="hover:text-green-400 transition-colors duration-300">Doações</a>
                </li>
            </ul>
        </div>
        <!-- Campo de busca, notificações -->
        <div class="bg-gray-800 text-gray-300 py-1 w-80 rounded-full flex justify-between content-around">
            <!-- Ícone de notificações -->
            <button class="focus:outline-none ml-5">
                <i class="fa fa-bell text-gray-300 hover:text-green-400 transition-colors duration-300 "></i>
            </button>

            <!-- Campo de busca -->
            <div class="relative">
                <button id="botao-pesquisar"
                    class="bg-white text-gray-700 py-3 px-3 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    <i class="fa fa-search">
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                    </i>
                </button>

                <ul id="pesquisa" role="list"
                    class="hidden absolute right-0 mt-2 w-96 bg-transparent rounded-lg shadow-lg z-10 backdrop-blur-lg bg-white/30 border border-white/30">
                    <!-- Campo de pesquisa -->
                    <label class="relative block">
                        <input
                            class="placeholder:bold  placeholder:text-slate-400 block text-black bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                            placeholder="Buscar" type="text" name="search" />
                    </label>

                    <!-- Item 1 -->
                    <li class="group/item hover:bg-slate-100 cursor-pointer flex items-center px-4 py-2 rounded-lg">
                        <img src="{{asset('images/svg/dev/senhor dos aneis.webp')}}" alt="Publicação"
                            class="rounded-lg w-20 h-30 mr-3">
                        <div class="flex flex-col">
                            <a href="#" class="text-gray-900 font-semibold">Senhor dos Aneis</a>
                            <p class="text-gray-900 text-sm">A Sociedade do Anel</p>
                        </div>
                        <button
                            class="bg-gray-800 text-white py-3 px-3 rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 ml-10">
                            <span>Acessar</span>
                        </button>
                    </li>

                    <!-- Item 2 -->
                    <li class="group/item hover:bg-slate-100 cursor-pointer flex items-center px-4 py-2 rounded-lg">
                        <img src="https://harpercollins.com.br/cdn/shop/products/9786555113624_9ccf4ad4-11c6-47e2-a030-524caa2fbd64.jpg?v=1686059307"
                            alt="Publicação" class="rounded-lg w-20 h-30 mr-3">
                        <div class="flex flex-col">
                            <a href="#" class="text-gray-900 font-semibold">Senhor dos Aneis</a>
                            <p class="text-gray-900 text-sm">As Duas Torres</p>
                        </div>
                        <button
                            class="bg-gray-800 text-white py-3 px-3 rounded-lg shadow focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 ml-10">
                            <span>Acessar</span>
                        </button>
                    </li>
                </ul>
            </div>


            <script>
            // Referências ao botão de pesquisa e ao dropdown
            const botaoPesquisar = document.getElementById('botao-pesquisar');
            const pesquisa = document.getElementById('pesquisa');

            // Alternar a visibilidade do dropdown ao clicar no botão de pesquisa
            botaoPesquisar.addEventListener('click', () => {
                pesquisa.classList.toggle('hidden');
            });

            // Fechar o dropdown quando clicar fora dele
            document.addEventListener('click', (e) => {
                if (!botaoPesquisar.contains(e.target) && !pesquisa.contains(e.target)) {
                    pesquisa.classList.add('hidden');
                }
            });
            </script>
        </div>

        <!-- Tag do usuário -->
        <div class="flex items-center gap-2">
            <img src="{{asset('../images/svg/dev/avatar.png')}}" alt="Avatar do usuário"
                class="w-8 h-8 rounded-full bg-red-900">
            <span class="text-gray-300">Usuário</span>
        </div>
    </nav>
</header>

<!-- Conteúdo Principal -->
<section class="container mx-auto mt-20 flex justify-between">
    <!-- Publicações -->
    <div class="publicacoes w-2/3 p-4">
        <div class="publicacao bg-gray-800 text-gray-300 p-4 rounded-lg mb-3 bg-cover inset-0:"
            style="background-image: linear-gradient(rgba(79, 81, 99, 0.7) 45%, rgba(17, 24, 39, 1) 51%), url('https://harpercollins.com.br/cdn/shop/products/9786555113631_79a81e4f-07c1-4aa8-ba58-b44033442bbf.jpg?v=1686061056'); ">


            <h2 class="text-2xl font-bold mb-4">O Senhor dos Anéis: A Sociedade do Anel</h2>
            <img src="{{asset('images/svg/dev/senhor dos aneis.webp')}}" alt="Publicação"
                class="mb-4 rounded-lg self-center">
            <p>O Senhor dos Anéis: A Sociedade do Anel é o primeiro volume da trilogia escrita por J.R.R. Tolkien,
                ambientada na terra fictícia de Arda, mais precisamente na região da Terra-média. A história começa no
                pacífico Condado, onde vive o hobbit Frodo Bolseiro, que herda de seu tio Bilbo um anel mágico. Porém,
                este objeto aparentemente inofensivo revela ser o Um Anel, uma poderosa ferramenta de controle forjada
                pelo maligno Sauron para dominar toda a Terra-média.</p>

            <p>Quando Gandalf, o mago amigo de Bilbo, descobre a verdadeira natureza do anel, Frodo é encarregado de
                levá-lo para longe do Condado, pois Sauron enviou seus servos, os terríveis Nazgûl, em busca do anel.
                Frodo parte em uma jornada perigosa, acompanhado de seus amigos Sam, Merry e Pippin. Ao longo do
                caminho, eles se juntam a Aragorn, um guardião misterioso, e eventualmente formam a Sociedade do Anel,
                composta por nove companheiros: Frodo, Sam, Merry, Pippin, Aragorn, Gandalf, Legolas (um elfo), Gimli
                (um anão) e Boromir (um guerreiro humano).</p>

            <p>Juntos, a Sociedade do Anel tem a missão de levar o Um Anel até a Montanha da Perdição, no coração da
                terra de Mordor, onde o anel poderá ser destruído. Durante sua jornada, eles enfrentam inúmeros desafios
                e batalhas, e a união do grupo é testada à medida que as forças do mal de Sauron e o poder corruptor do
                anel ameaçam destruí-los.</p>

            <p>O livro explora temas como amizade, coragem e sacrifício, enquanto leva o leitor através de paisagens e
                culturas detalhadas da Terra-média, criando um universo épico que se tornou uma referência na literatura
                de fantasia.</p>

        </div>

        <div class="publicacao bg-gray-800 text-gray-300 p-4 rounded-lg bg-cover"
            style="background-image: linear-gradient(rgba(79, 81, 99, 0.7) 45%, rgba(17, 24, 39, 1) 51%), url('https://harpercollins.com.br/cdn/shop/products/9786555113624_9ccf4ad4-11c6-47e2-a030-524caa2fbd64.jpg?v=1686059307');">
            <h2 class="text-2xl font-bold mb-4">Título da publicação</h2>
            <img src="{{asset('https://harpercollins.com.br/cdn/shop/products/9786555113624_9ccf4ad4-11c6-47e2-a030-524caa2fbd64.jpg?v=1686059307')}}"
                alt="Publicação" class="mb-4 rounded-lg self-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur.</p>
        </div>

    </div>

    <!-- Barra lateral de Livros -->
    <aside class="sidebar w-1/4 p-4">
        <div class="livro bg-gray-800 text-gray-300 p-4 rounded-lg mb-6">
            <img src="{{asset('images/svg/dev/develop-in-desktop.svg')}}" alt="Livro X"
                class="mb-4 rounded-lg self-center">
            <p class="mb-2">Livro X</p>
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Ver</button>
        </div>

        <div class="livro bg-gray-800 text-gray-300 p-4 rounded-lg mb-6">
            <img src="{{asset('images/svg/dev/develop-in-desktop.svg')}}" alt="Livro X"
                class="mb-4 rounded-lg  w-[10px] h-[10px]">
            <p class="mb-2">Livro X</p>
            <button class="bg-green-500 text-white px-4 py-2 rounded-lg">Ver</button>
        </div>
    </aside>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loginModal = document.getElementById('login-modal');
    const loginButton = document.querySelector('.login-button');

    loginButton.addEventListener('click', function() {
        loginModal.classList.toggle('hidden');
    });
});