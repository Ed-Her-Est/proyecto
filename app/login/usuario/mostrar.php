<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega otros enlaces a tus estilos o scripts si es necesario -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Clinica D.A</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href='/'>Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href='/usuario/agregar'>Agregar</a>
                        <a class="dropdown-item" href='/usuario/mostrar'>Mostrar</a>
                        <a class="dropdown-item" href='/usuario/buscar'>Buscar</a>
                    </div>
                </li>
            <!-- Puedes agregar más elementos de menú según tus necesidades -->
        </ul>
    </div>
</nav>

<div class="container">
    <!-- Resto de tu contenido -->
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mb-4">Usuarios</h2>

            <!-- Tabla de usuarios -->
            <table class="table table-bordered table-striped text-center">
                <!-- Cabecera de la tabla -->
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Nombre de Usuario</th>
                        <th>Contraseña</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php foreach ($usuarios as $usuario) : ?>
                        <tr>
                            <td><?= $usuario->nombre ?></td>
                            <td><?= $usuario->apellidoPaterno ?></td>
                            <td><?= $usuario->apellidoMaterno ?></td>
                            <td><?= $usuario->usuario ?></td>
                            <td><?= $usuario->contrasenia ?></td>
                            <td><?= $usuario->email  ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a href="<?= base_url('usuario/editar/' . $usuario->ID_Usuario) ?>" class="btn btn-primary">Editar</a>

                                <!-- Formulario para eliminar -->
                                <form action="<?= base_url('usuario/delete/' . $usuario->ID_Usuario) ?>" method="POST" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Agrega otros scripts que puedas necesitar -->

</body>
</html>
