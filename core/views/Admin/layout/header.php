<div class="conteiner">
    <nav class="navbar navbar-expand-lg bg-body-tertiary py-2">
        <div class="container-fluid px-4 ">
            <a class="navbar-brand" href="#">AGencia Dev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>Admin"><!--<i class="fa-solid fa-home"></i>--> Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>Admin/Pagar">A pagar</a></li>
                            <li><a class="dropdown-item" href="<?= BASE_URL ?>Admin/Receber">A Receber</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filmes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Php</a></li>
                            <li><a class="dropdown-item" href="#">Js</a></li>
                            <li><a class="dropdown-item" href="#">html e Css</a></li>
                        </ul>
                    </li> -->
                
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>Admin/Work">Trabalhos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>Admin/Setting">Definiçoes</a>
                    </li>

                </ul>
            </div>

            <div class="dropdown">
                <button class="btn dropdown-toggle text-white " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="">Welcome: Chester Macoda</span><i class="fa-solid fa-user mx-2"></i>
                </button>
                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid px-4">