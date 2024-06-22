<section>
    <h2 style="color: #333;">Descubre destinos increíbles, vive aventuras inolvidables y sumérgete en culturas fascinantes. </h2>
    <h2 style="color: #383838;">En UTOPIA·TRAVEL, te ofrecemos viajes únicos, diseñados para crear recuerdos duraderos. </h2>
    <h2 style="color: #404040;">¡Empieza a planear tu próxima escapada hoy mismo y deja que tu aventura comience!</h2>

    <div id="carouselExample" class="carousel slide justify-content-center mt-4 mb-2 miBoton" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <a class="navbar-brand logo" href="<?= base_url('productos') ?>">
                    <img src="<?php echo base_url('assets/img/img1.jpg'); ?>" class="rounded img-section mx-auto img-fluid" alt="...">
                    <!-- <img src="assets/img/oferta1.jpg" class="d-block w-100 h-auto img-fluid" alt="..."> -->
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <a class="navbar-brand logo" href="<?= base_url('productos') ?>">
                    <img src="<?php echo base_url('assets/img/img2.jpg'); ?>" class="rounded img-section" alt="...">
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <a class="navbar-brand logo" href="<?= base_url('productos') ?>">
                    <img src="<?php echo base_url('assets/img/img3.jpg'); ?>" class="rounded mx-auto d-block img-section" alt="...">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color: #333;" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="background-color: #333;" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>