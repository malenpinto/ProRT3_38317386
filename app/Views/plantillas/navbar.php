<!-- <nav class="navbar navbar-expand-lg sticky-top">
    <ul class="navbar-nav text-center">
        <a class="navbar-brand logo tipoLetraLogo" href="principal.html">·UTOPIA·TRAVEL·</a>
        <li class="nav-item">
            <a class="nav-link active tipoLetra" aria-current="page" href="principal.html">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link tipoLetra" href="#">Quiénes somos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link tipoLetra" href="#">Contacto</a>
        </li>
    </ul>
</nav> -->

<nav class="navbar navbar-expand-md navbar-nav sticky-top miBoton">
    <div class="d-flex justify-content-center align-content-center">
        <div class="row">
            <div class="col d-none d-md-block text-center">
                <ul>
                    <li><a class="navbar-brand logo tipoLetraLogo" href="principal.html">·UTOPIA·TRAVEL·</a></li>

                    <li>
                        <form class="d-flex w-50" role="search">
                            <input class="form-control me-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Search">
                            <button class="btn btn-outline" type="search"><i class="fa-solid fa-magnifying-glass fa-sm"></i></button>
                        </form>
                    </li>
                    <div class="collapse navbar-collapse me-2 d-none d-md-block" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex align-items-center">
                            <li class="nav-item me-2">
                                <a class="nav-link <?php echo (current_url() == base_url()) ? 'active-2' : ''; ?> cambio-letra-uno" aria-current="page" href="<?= base_url() ?>">Inicio</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link <?php echo (current_url() == base_url('quienessomos')) ? 'active-2' : ''; ?> cambio-letra-uno" href="<?php echo base_url('quienessomos'); ?>">Quiénes Somos</a>
                            </li>
                            <li class="nav-item me-5">
                                <a class="nav-link <?php echo (current_url() == base_url('contacto')) ? 'active-2' : ''; ?> cambio-letra-uno" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link cambio-letra-uno <?php echo (current_url() == base_url('iniciarsesion')) ? 'active-2' : ''; ?>" aria-current="page" href="<?= base_url('iniciarsesion') ?>">
                                    <i class="fa-solid fa-user me-2"></i>Iniciar sesión
                                </a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link cambio-letra-uno <?php echo (current_url() == base_url('registrarse')) ? 'active-2' : ''; ?>" aria-current="page" href="<?= base_url('registrarse') ?>">
                                    <i class="fa-solid fa-user-plus me-2"></i>Registrarse
                                </a>
                            </li>
                        </ul>

                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid d-md-none justify-content-start">
        <a class="navbar-brand logo tipoLetraLogo" href="principal.html">·UTOPIA·TRAVEL·</a>
        <!-- <a class="navbar-brand ms-1" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/img/Logo.png'); ?>" class="imagen-efecto" width="50px">
        </a> -->
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex w-50" role="search">
            <input class="form-control me-2" type="search" placeholder="¿Qué estás buscando?" aria-label="Search">
            <button class="btn btn-outline" type="search"><i class="fa-solid fa-magnifying-glass fa-sm"></i></button>
        </form>
        <div class="collapse navbar-collapse text-start ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 d-md-none">
                <li class="nav-item">
                    <a class="nav-link active ms-3 cambio-letra-uno" aria-current="page" href="<?= base_url() ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3 <?php echo (current_url() == base_url('quienessomos')) ? 'active-2' : ''; ?> cambio-letra-uno" href="<?php echo base_url('quienessomos'); ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3 cambio-letra-uno " href="<?php echo base_url('contacto'); ?>">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid d-md-none me-3 justify-content-end">
        <a class="nav-link cambio-letra-uno <?php echo (current_url() == base_url('iniciarsesion')) ? 'active-2' : ''; ?> me-3" aria-current="page" href="<?= base_url('iniciarsesion') ?>">
            <i class="fa-solid fa-user me-2"></i>Iniciar sesión
        </a>
        <a class="nav-link cambio-letra-uno <?php echo (current_url() == base_url('registrarse')) ? 'active-2' : ''; ?>" aria-current="page" href="<?= base_url('registrarse') ?>">
            <i class="fa-solid fa-user-plus me-2"></i>Registrate
        </a>
    </div>
</nav>