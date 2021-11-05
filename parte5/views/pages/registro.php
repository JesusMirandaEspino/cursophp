
<div class="col-full-12">
    <h1>Regristro</h1>
</div>


<div class="d-flex">

    <form class="bg-light" method="post" >
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="nombre" aria-describedby="nombre" name="registroNombre">
            </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="registroEmail">
            </div>
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" aria-describedby="pwd" name="registroPwd">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php

        $registro = new ControladorFormularios();

        $registro->ControlRegistro();

    ?>

</div>