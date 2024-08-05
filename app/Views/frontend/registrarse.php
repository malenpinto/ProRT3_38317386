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
    <h2 class="text-center cambio-letra-uno">Registrarse</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <?= form_open('registrar') ?>
                <?= form_label('Nombre', 'nombre', ['class' => 'form-label col-sm-2 ms-5 mt-1 cambio-letra-uno']) ?>
                <div class="col-sm-10 ms-5">
                    <?= form_input([
                        'type' => 'text',
                        'name' => 'nombre',
                        'class' => 'form-control',
                        'placeholder' => 'Escriba su nombre',
                        'value' => set_value('nombre'),
                    ]) ?>
                    <!--Mostrar mensaje de error -->
                    <?php if (isset($validation['nombre'])) : ?>
                        <div class="alert alert-danger p-1 ms-2" role="alert"><?= esc($validation['nombre']) ?></div>
                    <?php endif; ?>
                </div>


                <?= form_label('Apellido', 'apellido', ['class' => 'form-label col-sm-2 ms-5 mt-1 cambio-letra-uno']) ?>
                <div class="col-sm-10 ms-5">
                    <?= form_input([
                        'type' => 'text',
                        'name' => 'apellido',
                        'class' => 'form-control',
                        'placeholder' => 'Escriba su apellido',
                        'value' => set_value('apellido'),
                    ]) ?>
                    <!--Mostrar mensaje de error -->
                    <?php if (isset($validation['apellido'])) : ?>
                        <div class="alert alert-danger p-1 ms-2" role="alert"><?= esc($validation['apellido']) ?></div>
                    <?php endif; ?>
                </div>

                <?= form_label('Correo Electrónico', 'email', ['class' => 'form-label col-sm-2 ms-5 mt-1 d-inline cambio-letra-uno']) ?>
                <div class="col-sm-10 ms-5">
                    <?= form_input([
                        'type' => 'email',
                        'name' => 'email',
                        'class' => 'form-control',
                        'placeholder' => 'Escriba su correo',
                        'value' => set_value('email')
                    ]) ?>
                    <!--Mostrar mensaje de error -->
                    <?php if (isset($validation['email'])) : ?>
                        <div class="alert alert-danger p-1 ms-2" role="alert"><?= esc($validation['email']) ?></div>
                    <?php endif; ?>
                </div>

                <?= form_label('Contraseña', 'password', ['class' => 'form-label col-sm-2 ms-5 mt-1 cambio-letra-uno']) ?>
                <div class="col-sm-10 ms-5">
                    <?= form_password([
                        'name' => 'password',
                        'class' => 'form-control',
                        'placeholder' => 'Escriba su contraseña',
                    ]) ?>
                    <!--Mostrar mensaje de error -->
                    <?php if (isset($validation['password'])) : ?>
                        <div class="alert alert-danger p-1 ms-2" role="alert"><?= esc($validation['password']) ?></div>
                    <?php endif; ?>
                </div>

                <?= form_label('Repetir contraseña', 'passconf', ['class' => 'form-label col-sm-2 ms-5 mt-1 d-inline cambio-letra-uno']) ?>
                <div class="col-sm-10 ms-5">
                <?= form_password([
                    'name' => 'passconf',
                    'class' => 'form-control',
                    'placeholder' => 'Repita la contraseña',
                ]) ?>
                <!--Mostrar mensaje de error -->
                <?php if (isset($validation['passconf'])) : ?>
                    <div class="alert alert-danger p-1 ms-2" role="alert"><?= esc($validation['passconf']) ?></div>
                <?php endif; ?>
            </div>
            <div class="col-auto ms-5 mt-3">
                <button type="submit" class="btn btn-outline-dark cambio-letra-uno mb-3"> · Crear Cuenta ·</button>
            </div>
            <?= form_close() ?>
        </div>
        <h5 class="mt-4 mb-5 text-center cambio-letra-uno">¿Ya tenés cuenta? Ingresa acá: <a class="no-underline " href="<?php echo base_url('iniciarsesion'); ?>">
                <p class="d-inline" style="color: #5b8faf;">Iniciar sesión </p><i class="fa-regular fa-hand-point-left"></i>
            </a></h5>
    </div>
</div>
</div>