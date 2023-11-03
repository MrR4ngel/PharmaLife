<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaLife</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <input type="checkbox" id="menu" class="container__botao">
            <label for="menu" class="container__label">
                <span class="header__menu-hamburguer container__imagem"></span>
            </label>

            <img src="img/logo.png" alt="logo da AluraBooks" class="container__imagem">
            <h1 class="container__titulo"><b class="container__titulo--negrito">Pharma</b>Life</h1>
        </div>

        <ul class="options">
            <input type="checkbox" id="options__menu" class="options__button">
            <label for="options__menu" class="options__label">
                <li class="options__item">Categorias</li>
            </label>
            <ul class="lista-menu">
                <li class="lista-menu__item">
                    <a href="#" class="lista-menu__link">Medicamentos</a>
                </li>
                <li class="lista-menu__item">
                    <a href="#" class="lista-menu__link">Perfumaria</a>
                </li>
                <li class="lista-menu__item">
                    <a href="#" class="lista-menu__link">Higiene Pessoal</a>
                </li>
                <li class="lista-menu__item">
                    <a href="#" class="lista-menu__link">Baby</a>
                </li>
                
            </ul>
            <li class="options__item"><a href="pages/produtos.html   " class="options__link">Promoções</a></li>
            <li class="options__item"><a href="pages/faleConosco.html" class="options__link">Fale conosco</a></li>
        </ul>

        <div class="container">
            <a href="#">
                <img src="img/Favoritos.svg" alt="Meus favoritos" class="container__imagem-transparente container__imagem" >
            </a>
            <a href="#" class="container__link">
                <img src="img/Compras.svg" alt="Carrinho de compras" class="container__imagem">
                <p class="container__texto">Minha sacola</p>
            </a>
            <a href="/pages/login.html" class="container__link">
                <img src="img/Usuário.svg" alt="Meu perfil" class="container__imagem">
                <p class="container__texto">Meu perfil</p>
            </a>
        </div>
    </header>

    <section class="banner">
        <h2 class="banner__titulo">Encontre tudo que você precisa por aqui!</h2>
        <p class="banner__texto"></p>
        <input type="search" class="banner__pesquisa" placeholder="O que você vai querer hoje?">
    </section>

    <section class="carrossel">
        <h2 class="carrossel__titulo">Promoções</h2>
        
            <div class="carrossel__container">
                <!-- Slider main container -->
                <div class="swiper">

                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div> 

                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide"><img src="img/Paracetamol.png" alt="Paracetamol"></div>
                        <div class="swiper-slide"><img src="img/escova.png" alt="Escova colgate"></div>
                        <div class="swiper-slide"><img src="img/fraldapampers.png" alt="fralda pampers"></div>
                        <div class="swiper-slide"><img src="img/fiodentalSanifil.png" alt="fio dental Sanifil"></div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->

                </div>
                <div class="card">
                    <div class="card__descricao">
                        <div class="descricao>">
                            <h3 class="descricao__titulo">Talvez você também se interesse por...</h3>
                            <h2 class="descricao__titulo-livro">Fralda Cremer Dia e Noite</h2>
                            <p class="descricao__texto">Fornece proteção contra vazamentos e pele seca por até 12 horas, noite e dia.</p>
                        </div>
                        <img src="img/fraldaCremer.png" class="descricao__imagem">
                    </div>

                    <div class="card__botoes">
                        <ul class="botoes">
                            <li class="botoes__itens"><img src="img/Favoritos.svg" alt="Adicionar favorito"></li>
                            <li class="botoes__itens"><img src="img/Compras.svg" alt="Adicionar ao Carrinho de compras"></li>
                        </ul>
                        
                        <a href="#" class="botoes__ancora">Saiba mais</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="topicos">
            <h2 class="topicos__titulo">TÓPICOS MAIS VISITADOS</h2>
            <ul class="topicos__lista">
                <li class="topicos__item">
                    <a href="#" class="topicos__link">Febre</a>
                </li>
                <li class="topicos__item">
                    <a href="#" class="topicos__link">Fraldas</a>
                </li>
                <li class="topicos__item">
                    <a href="#" class="topicos__link">Anticossepcional</a>
                </li>
                <li class="topicos__item">
                    <a href="#" class="topicos__link">Desodorante</a>
                </li>
                <li class="topicos__item">
                    <a href="#" class="topicos__link">Hidratante</a>
                </li> 
            </ul>
        </section>

        <section class="contato">
            <div class="contato__descricao">
                <h2 class="contato__titulo">Fique por dentro das novidades!</h2>
                <p class="contato__texto">Atualizações de estoque, novos produtos, promoções e outros.</p>
            </div>
                <input type="email" placeholder="Cadastre seu e-mail" class="contato__email">
        </section>

        <hr/>

        <footer class="rodape">
            <h2 class="rodape__titulo">Pharma Life</h2>
             <!--<ul class="lista-rodape">
                <li class="lista-rodape__titulo">Educação</li>
                <li class="lista-rodape__item">
                    <img src="img/CasaDoCodigo.png" alt="Logo da casa do código">
                    <a href="#" class="lista-rodape__link">Casa do código</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/Caelum.png" alt="Logo da Caelum">
                    <a href="#" class="lista-rodape__link">Caelum</a>
                </li>
            </ul>

            <ul class="lista-rodape">
                <li class="lista-rodape__titulo">Educação online</li>
                <li class="lista-rodape__item">
                    <img src="img/Alura.png" alt="Logo da Alura">
                    <a href="#" class="lista-rodape__link">Alura</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/AluraEmpresas.png" alt="Logo da Alura Empresas">
                    <a href="#" class="lista-rodape__link">Alura para empresas</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/AluraLatam.png" alt="Logo da Alura LATAM">
                    <a href="#" class="lista-rodape__link">Alura LATAM</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/AluraStart.png" alt="Logo da Alura start">
                    <a href="#" class="lista-rodape__link">Alura Start</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/MusicDot.png" alt="Logo da MusicDot">
                    <a href="#" class="lista-rodape__link">MusicDot</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/AluraLingua.png" alt="Logo da Alura Língua">
                    <a href="#" class="lista-rodape__link">Alura Língua</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/PM3.png" alt="Logo da PM3">
                    <a href="#" class="lista-rodape__link">PM3</a>
                </li>
            </ul>

            <ul class="lista-rodape">
                <li class="lista-rodape__titulo">Comunidade</li>
                <li class="lista-rodape__item">
                    <img src="img/HipstersTech.png" alt="Logo da Hipsters Tech">
                    <a href="#" class="lista-rodape__link">Hipsters ponto Tech</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/Scuba.png" alt="Logo da Scuba">
                    <a href="#" class="lista-rodape__link">Scuba Dev</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/Layers.png" alt="Logo da Layers Tech">
                    <a href="#" class="lista-rodape__link">Layers ponto Tech</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/LikeABoss.png" alt="Logo da Like a Boss">
                    <a href="#" class="lista-rodape__link">Like a Boss</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/CarreiraSemFronteira.png" alt="Logo da Carreira Sem Fronteira">
                    <a href="#" class="lista-rodape__link">Carreira sem Fronteira</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/HipstersJobs.png" alt="Logo da HipstersJobs">
                    <a href="#" class="lista-rodape__link">Hipsters ponto Jobs</a>
                </li>
                <li class="lista-rodape__item">
                    <img src="img/GUJ.png" alt="Logo da GUJ">
                    <a href="#" class="lista-rodape__link">GUJ</a>
                </li>
            </ul>
        -->
        </footer>
    
    <script src="scripts/header_hover.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="scripts/swiper.js"></script>
    <script src="scripts/swiper_nav.js"></script>
    <script src="scripts/swiper_autoplay.js"></script>

</body>

</html>