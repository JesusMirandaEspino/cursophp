<?php

if( isset($_SESSION['validarIngreso']) ){
    if($_SESSION['validarIngreso'] != 'ok' ){
        echo '<script>  window.location = "index.php?pages=ingreso"; </script>';
        return;
    }
}else{
    echo '<script>  window.location = "index.php?pages=ingreso"; </script>';
    return;
}

$usuarios = ControladorFormularios::SeleccionarRegistros();

?>


<table class="table" aria-label="Data user" aria-describedby="list">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha</th>
            <th scope="col">Accciones</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($usuarios as $usuario => $valor) :  ?>
            <tr>
                <th scope="row"> <?php echo $valor['id'] ?> </th>
                <td> <?php echo $valor['nombre'] ?> </td>
                <td> <?php echo $valor['email'] ?> </td>
                <td> <?php echo $valor['fecha'] ?> </td>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-warning"> <i class="fas fa-pencil-alt"></i> </button>
                        <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </button>
                    </div>
                </td>
            </tr>


        <?php endforeach  ?>

    </tbody>
</table>