<?php

if (isset($_GET['id'])) {

    $item = 'id';
    $valor = $_GET['id'];

    $usuario = ControladorFormularios::SeleccionarRegistros($item, $valor);
}

?>



<div class="col-full-12">
    <h1>Actualizar</h1>
</div>


<div class="d-flex">

    <form class="bg-light" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label"> Nuevo Nombre </label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" aria-describedby="nombre" value="<?php echo $usuario['nombre']; ?>" placeholder="Nuevo Nombre" name="actualizarNombre">
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Nuevo Correo Electronico</label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" aria-describedby="email" value="<?php echo $usuario['email']; ?>" name="actualizarEmail">
            </div>
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Nuevo Password</label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" aria-describedby="pwd" name="actualizarPwd">
                <input type="hidden" name="actualPwd" value="<?php echo $usuario['password']; ?>">
                <input type="hidden" name="idUsuario" value="<?php echo $usuario['id']; ?>">
            </div>
        </div>

        <?php

        $actualizar = new ControladorFormularios();
        $actualizar->ActualizarRegistro();

        ?>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>



</div>