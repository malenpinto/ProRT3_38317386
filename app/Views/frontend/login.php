<div class="container d-flex justify-content-center">
    <?php if (session()->getFlashData('mensaje')) : ?>
        <div class="alert alert-success mt-3" role="alert">
            <?= session()->getFlashdata('mensaje') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->has('error')) : ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?= session('error') ?>
        </div>
    <?php endif; ?>
</div>

<div class="container mt-5">
    <h2 class="text-center cambio-letra-uno">Iniciar Sesión</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group ">
                <?= form_open('verificarUsuario') ?>
                <?= form_label('Correo Electrónico', 'email', ['class' => 'col-sm-2 form_label d-inline ms-5 cambio-letra-uno']) ?>
                <div class="col-sm-10 ms-5">
                    <?= form_input([
                        'type' => 'email',
                        'name' => 'email',
                        'class' => 'form-control ms-1 mb-2',
                        'placeholder' => 'Escriba su correo electrónico',
                        'value' => set_value('email')
                    ]) ?>
                    <!--Mostrar mensaje de error -->
                    <?php if (isset($validation['email'])) : ?>
                        <div class="alert alert-danger p-1 ms-2" role="alert"><?= esc($validation['email']) ?></div>
                    <?php endif; ?>
                </div>

                <?= form_label('Contraseña', 'password', ['class' => 'col-sm-2 form_label ms-5 cambio-letra-uno']) ?>
                <div class="col-sm-10 ms-5">
                    <?= form_password([
                        'name' => 'password',
                        'class' => 'form-control ms-1 mb-2',
                        'placeholder' => 'Escriba su contraseña'
                    ]) ?>
                    <!--Mostrar mensaje de error -->
                    <?php if (isset($validation['password'])) : ?>
                        <div class="alert alert-danger p-1 ms-2" role="alert"><?= esc($validation['password']) ?></div>
                    <?php endif; ?>
                </div>
                <div class="col-auto ms-5 mt-3">
                    <button type="submit" class="btn btn-outline-dark cambio-letra-uno mb-3"> · Iniciar Sesión ·</button>
                </div>
                <?= form_close() ?>
            </div>
            <h5 class="mt-4 mb-5 text-center cambio-letra-uno">¿No tenés cuenta? Registrate acá: <a class="no-underline " href="<?php echo base_url('registrarse'); ?>">
                    <p class="d-inline" style="color: #5b8faf;">Crear cuenta </p><i class="fa-regular fa-hand-point-left"></i>
                </a></h5>
        </div>
    </div>
</div>