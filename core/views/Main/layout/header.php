<body class="bg-black">
<div class="conteiner" <?php if(isset($id) && !empty($id)){ ?>style=" background-image: linear-gradient(rgba(14, 13, 13, 0.801),rgba(14, 13, 13, 0.801)),url('<?=BASE_URL?>public/assets/images/background.jpg');" <?php } ?>>
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


        
    <!-- </div> -->
       