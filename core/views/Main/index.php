<div class="conteiner" style="background-image: linear-gradient(rgba(25, 24, 26, 0.493),rgba(25, 24, 26, 0.493)),url('public/assets/images/background.jpg');">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container menu">
            <a class="navbar-brand logo" href="#">
                <h2><span>Dark</span> Movies</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navmenu" id="navbarNavDropdown">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link  " aria-current="page" href="<?= BASE_URL ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>Main/Filmes">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Series</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Animes</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tutpriais
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Php</a></li>
                                <li><a class="dropdown-item" href="#">Js</a></li>
                                <li><a class="dropdown-item" href="#">html e Css</a></li>
                            </ul>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="section container">
        <div class="top">
            <p class="descri-top h1">
                Fast Furios 10
            </p>
            <button class="btn">ver Filme</button>
            <button class="btn">Adicionar Para ver Depois</button>
        </div>
    </section>
</div>
<main class=" ">
    <section class="destaques">
        <div class="butoes-destaque container ">
            <p>Assistir FIlmes Online</p>
            <div class="buttao active">Destaque</div>
            <div class="buttao">Recentes</div>
            <div class="buttao">Mais Recentes</div>
        </div>
        <div class="destaquesMoveis justify-content-center">
        <a href="<?=BASE_URL?>Main/Filme/1">
            <div class="card-ds" style="height: 240px;width: 200px; background-image: url('public/assets/images/download.jpg')">
                <div class="descricao">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing.
                        Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                </div>
            </div>
        </a> 
        </div>
    </section>
</main>