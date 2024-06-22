<div class="container mt-5">
    <h2 class="text-center cambio-letra-uno">Registrarse</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre" class="col-sm-2 ms-5 mt-1 col-form-label cambio-letra-uno">Nombre</label>
                <div class="col-sm-10 ms-5">
                    <input type="name" class="form-control" id="nombre" placeholder="Escriba su nombre">
                </div>
                <label for="apellido" class="col-sm-2 ms-5 mt-1 col-form-label cambio-letra-uno">Apellido</label>
                <div class="col-sm-10 ms-5">
                    <input type="name" class="form-control" id="apellido" placeholder="Escriba su apellido">
                </div>
                <label for="celular" class="col-sm-2 ms-5 mt-1 col-form-label cambio-letra-uno">Celular</label>
                <div class="col-sm-10 ms-5">
                    <input type="num" class="form-control" id="celular" placeholder="Escriba su celular">
                </div>
                <label for="email" class="col-sm-2 ms-5 mt-1 col-form-label cambio-letra-uno">Email</label>
                <div class="col-sm-10 ms-5">
                    <input type="email" class="form-control" id="email" placeholder="Escriba su email">
                </div>
                <label for="password" class="col-sm-2 ms-5 mt-1 col-form-label cambio-letra-uno">Contraseña</label>
                <div class="col-sm-10 ms-5">
                    <input type="password" class="form-control" id="password" placeholder="Escriba su contraseña">
                </div>
                <label for="repassword" class="col-sm-2 ms-5 mt-1 col-form-label cambio-letra-uno d-inline">Repetir contraseña</label>
                <div class="col-sm-10 ms-5">
                    <input type="password" class="form-control" id="repassword" placeholder="Repita su contraseña">
                </div>
                <div class="col-auto ms-5 mt-3">
                    <button type="submit" class="btn btn-outline-dark cambio-letra-uno mb-3"> · Crear Cuenta ·</button>
                </div>
            </div>
            <h5 class="mt-4 mb-5 text-center cambio-letra-uno">¿Ya tenés cuenta? Ingresa acá: <a class="no-underline " href="<?php echo base_url('iniciarsesion'); ?>">
                    <p class="d-inline" style="color: #5b8faf;">Iniciar sesión </p><i class="fa-regular fa-hand-point-left"></i>
                </a></h5>
        </div>
    </div>
</div>