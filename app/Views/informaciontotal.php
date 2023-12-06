<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Total</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <li class="nav-item">
                    <a class="nav-link" href='/paciente/mostrar'>Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='/fisioterapeuta/mostrar'>Fisioterapeutas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='/control/mostrar'>Controles</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2 class="mt-4">Información Total</h2>

        <!-- Información de Pacientes -->
        <h3 class="mt-4">Pacientes</h3>
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>INE</th>
                    <th>Género</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente) : ?>
                    <tr>
                        <td><?= ucfirst($paciente['nombre']) ?></td>
                        <td><?= ucfirst($paciente['apellidoPaterno']) ?></td>
                        <td><?= ucfirst($paciente['apellidoMaterno']) ?></td>
                        <td><?= strtoupper($paciente['ine']) ?></td>
                        <td><?= ucfirst($paciente['genero']) ?></td>
                        <td>
                            <a href="<?= base_url('paciente/editar/' . $paciente['ID_Paciente']) ?>" class="btn btn-primary">Editar</a>
                            <form action="<?= base_url('paciente/delete/' . $paciente['ID_Paciente']) ?>" method="POST" style="display:inline;">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este paciente?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Información de Fisioterapeutas -->
        <h3 class="mt-4">Fisioterapeutas</h3>
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Usuario</th>
                    <th>Género</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fisioterapeutas as $fisioterapeuta) : ?>
                    <tr>
                        <td><?= ucfirst($fisioterapeuta['nombre']) ?></td>
                        <td><?= ucfirst($fisioterapeuta['apellidoPaterno']) ?></td>
                        <td><?= ucfirst($fisioterapeuta['apellidoMaterno']) ?></td>
                        <td><?= $fisioterapeuta['usuario'] ?></td>
                        <td><?= ucfirst($fisioterapeuta['genero']) ?></td>
                        <td><?= $fisioterapeuta['telefono'] ?></td>
                        <td>
                            <a href="<?= base_url('fisioterapeuta/editar/' . $fisioterapeuta['ID_Fisioterapeuta']) ?>" class="btn btn-primary">Editar</a>
                            <form action="<?= base_url('fisioterapeuta/delete/' . $fisioterapeuta['ID_Fisioterapeuta']) ?>" method="POST" style="display:inline;">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este fisioterapeuta?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Información de Controles -->
        <h3 class="mt-4">Controles</h3>
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Número de Expediente</th>
                    <th>Fecha de Ingreso</th>
                    <th>ID de Paciente</th>
                    <th>ID de Consultorio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($controles as $control) : ?>
                    <tr>
                        <td><?= $control['numExpediente'] ?></td>
                        <td><?= $control['fechaIngreso'] ?></td>
                        <td><?= $control['Paciente_ID'] ?></td>
                        <td><?= $control['Consultorio_ID'] ?></td>
                        <td>
                            <a href="<?= base_url('control/editar/' . $control['ID_Control']) ?>" class="btn btn-primary">Editar</a>
                            <form action="<?= base_url('control/delete/' . $control['ID_Control']) ?>" method="POST" style="display:inline;">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este control?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Agrega otros scripts que puedas necesitar -->

</body>

</html>
