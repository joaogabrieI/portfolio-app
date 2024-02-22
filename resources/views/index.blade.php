<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Portifólio</title>
</head>

<body>
    <header>
        <nav class="shadow-lg">
            <ul class="p-6 space-x-4 text-xl justify-end flex items-center mx-auto">
                <li><a href="#about_me">Sobre mim</a></li>
                <li><a href="#technologies">Tecnologias</a></li>
                <li><a href="#academic">Currículo acadêmico</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li>
                    <a href="#contact-me"
                        class="text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow btn-contact">Contatos</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="about_me" class="grid grid-colums-2 p-6 flex items-center">
            <div class="main_msg">
                <h1>Olá, eu sou João Gabriel, um desenvolvedor de software.</h1>
                <p>Sou um estudante dedicado de Desenvolvimento de Software com entusiasmo por aprender e crescer na
                    indústria. Minhas principais áreas de interesse são o desenvolvimento de aplicações com linguagem
                    PHP, HTML, CSS, Javascript e SQL. Estou constantemente aprimorando minhas habilidades técnicas e
                    buscando oportunidades para aplicar meus conhecimentos em projetos práticos.</p>
                <div class="mt-6">
                    <a href="#contact_me"
                        class="text-white font-semibold py-2 px-4 border border-gray-400 rounded shadow btn-contact">Entre
                        em contato</a>
                </div>
            </div>
            <div class="col-start-2">
                <img src="{{asset('images/eu.jpg')}}" alt="">
            </div>
        </section>
        <section id="technologies">
            <h2 class="p-6 ">Tecnologias</h2>
            <div class="grid grid-cols-3 justify-items-center">
                <div
                    class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{asset('images/php.png')}}" alt="" width="50px" height="50px">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium assumenda nemo eligendi
                        ipsum
                        inventore eum iste nihil aperiam dolorem, a officia quo fugit vero at modi nam corporis, nisi
                        voluptates.</p>
                </div>
                <div
                    class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{asset('images/php.png')}}" alt="" width="50px" height="50px">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo atque ratione optio voluptatibus facilis, repellendus numquam incidunt nihil dicta sapiente corporis. Accusamus, excepturi modi? Ipsa totam alias et incidunt! Earum.</p>
                </div>
                <div
                    class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{asset('images/php.png')}}" alt="" width="50px" height="50px">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo atque ratione optio voluptatibus facilis, repellendus numquam incidunt nihil dicta sapiente corporis. Accusamus, excepturi modi? Ipsa totam alias et incidunt! Earum.</p>
                </div>
                <div
                    class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{asset('images/php.png')}}" alt="" width="50px" height="50px">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium assumenda nemo eligendi
                        ipsum
                        inventore eum iste nihil aperiam dolorem, a officia quo fugit vero at modi nam corporis, nisi
                        voluptates.</p>
                </div>
                <div
                    class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{asset('images/php.png')}}" alt="" width="50px" height="50px">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo atque ratione optio voluptatibus facilis, repellendus numquam incidunt nihil dicta sapiente corporis. Accusamus, excepturi modi? Ipsa totam alias et incidunt! Earum.</p>
                </div>
                <div
                    class="max-w-sm m-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{asset('images/php.png')}}" alt="" width="50px" height="50px">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo atque ratione optio voluptatibus facilis, repellendus numquam incidunt nihil dicta sapiente corporis. Accusamus, excepturi modi? Ipsa totam alias et incidunt! Earum.</p>
                </div>
            </div>
        </section>
        <section id="academic">
            <div>
                <h2>2022 - atualmente</h2>
                <p>Serviço Nacional de Aprendizagem Comercial - SENAC</p>
                <p>Técnologo em Sistemas para internet</p>
            </div>
            <div>
                <h2>2020-2021</h2>
                <p>Centro Paula Souza - Escola Técnica Estadual de São Paulo</p>
                <p>Técnico em desenvolvimento de sistemas</p>
            </div>
        </section>
        <section id="projects">
            <div>
                <img src="" alt="">
                <h2>Landing page FT Máquinas</h2>
                <p>Página de divulgação desenvolvida para a empresa FT Máquinas</p>
            </div>

            <div>
                <img src="" alt="">
                <h2>Crud Alpha</h2>
                <p>Aplicação para administração de produtos de uma loja de jogos.</p>
            </div>
        </section>
    </main>
    <footer id="contact_me">
        <h2>Informações para contato</h2>
        <p>joaonalves1@gmail</p>
        <p>linkedin</p>
    </footer>
</body>

</html>