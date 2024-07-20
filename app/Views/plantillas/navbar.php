<nav class="navbar navbar-expand-md navbar-nav sticky-top miBoton">
    <div class="d-flex justify-content-center align-content-center">
        <div class="row">
            <div class="col d-none d-md-block text-center">
                <ul>
                    <li><a class="navbar-brand tipoLetraLogo ms-5" href="<?= base_url() ?>">·UTOPIA·TRAVEL·</a></li>

                    <li>
                        <form class="d-flex w-50 ms-5" role="search">
                            <input class="form-control" type="search" style="width: 550px;" placeholder="¿Qué estás buscando?" aria-label="Search">
                            <button class="btn btn-outline"><i class="fa-solid fa-magnifying-glass fa-sm"></i></button>
                        </form>
                    </li>
                    <div class="collapse navbar-collapse d-none d-md-block" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex align-items-center">
                            <li class="nav-item me-2">
                                <a class="nav-link <?php echo (current_url() == base_url()) ? 'active-2' : ''; ?> tipoLetra" aria-current="page" href="<?= base_url(); ?>">Inicio</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link <?php echo (current_url() == base_url('quienessomos')) ? 'active-2' : ''; ?> tipoLetra" href="<?php echo base_url('quienessomos'); ?>">Quiénes Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo (current_url() == base_url('contacto')) ? 'active-2' : ''; ?> tipoLetra" href="<?php echo base_url('contacto'); ?>">Contacto</a>
                            </li>

                            <?php if (session('login')) { ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link cambio-letra-uno dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-user me-2"></i><?php echo session('nombre'); ?></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item cambio-letra-uno" href="<?php echo base_url('cerrarsesion') ?>">Cerrar Sesión</a>
                                        </li>
                                    </ul>
                                </li>

                            <?php } else { ?>
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
                            <?php } ?>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid d-md-none justify-content-start">
        <a class="navbar-brand tipoLetraLogo" href="<?= base_url() ?>">·UTOPIA·TRAVEL·</a>
        <form class="d-flex w-50" role="search">
            <input class="form-control " type="search" style="width: 200px;" placeholder="¿Qué estás buscando?" aria-label="Search">
            <button class="btn btn-outline me-4"><i class="fa-solid fa-magnifying-glass fa-sm me-4"></i></button>
        </form>
        <button class="navbar-toggler justify-content-end ms-5" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-start ms-5" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 d-md-none">
                <li class="nav-item">
                    <a class="nav-link active ms-3 tipoLetra" aria-current="page" href="<?= base_url() ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3 <?php echo (current_url() == base_url('quienessomos')) ? 'active-2' : ''; ?> tipoLetra" href="<?php echo base_url('quienessomos'); ?>">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3 tipoLetra " href="<?php echo base_url('contacto'); ?>">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid d-md-none me-3 justify-content-end">
        <?php if (session('login')) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link cambio-letra-uno dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-user me-2"></i><?php echo session('nombre'); ?></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item cambio-letra-uno" href="<?php echo base_url('cerrarsesion') ?>">Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
        <?php } else { ?>
            <a class="nav-link cambio-letra-uno me-3 <?php echo (current_url() == base_url('carrito')) ? 'active-2' : ''; ?>" aria-current="page" href="<?= base_url('carrito') ?>">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <a class="nav-link cambio-letra-uno <?php echo (current_url() == base_url('iniciarsesion')) ? 'active-2' : ''; ?> me-3" aria-current="page" href="<?= base_url('iniciarsesion') ?>">
                <i class="fa-solid fa-user me-2"></i>Iniciar sesión
            </a>
            <a class="nav-link cambio-letra-uno <?php echo (current_url() == base_url('registrarse')) ? 'active-2' : ''; ?>" aria-current="page" href="<?= base_url('registrarse') ?>">
                <i class="fa-solid fa-user-plus me-2"></i>Registrate
            </a>
        <?php } ?>
    </div>
</nav>