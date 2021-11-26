<?php

if (isset($_SESSION['validarIngreso'])) {
    if ($_SESSION['validarIngreso'] != 'ok') {
        echo '<script>  window.location = "index.php?pages=ingreso"; </script>';
        return;
    }
} else {
    echo '<script>  window.location = "index.php?pages=ingreso"; </script>';
    return;
}



$usuarios = ControladorFormularios::SeleccionarRegistros(null, null);

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

                        <div class="px-1">
                            <a href="index.php?pages=editar&id=<?php echo $valor['id']; ?>" class="btn btn-warning"> <i class="fas fa-pencil-alt"></i> </a>
                        </div>

                        <div class="px-1">
                            <form action="" method="post">
                                <input type="hidden" name="eliminarRegistro" value="<?php echo $valor['id']; ?>">
                                <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> </button>


                            <?php 
                            
                                $eliminar = new ControladorFormularios();
                                $eliminar->eliminarRegistro();

                            ?>

                            </form>
                        </div>

                    </div>
                </td>
            </tr>


        <?php endforeach  ?>

    </tbody>
</table>