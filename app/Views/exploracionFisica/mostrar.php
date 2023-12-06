<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exploración Física</title>
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
                        Exploración Física
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href='/exploracionfisica/agregar'>Agregar</a>
                        <a class="dropdown-item" href='/exploracionfisica/mostrar'>Mostrar</a>
                        <a class="dropdown-item" href='/exploracionfisica/buscar'>Buscar</a>
                    </div>
                    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pacientes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/paciente/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/paciente/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/paciente/buscar'>Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Consultorio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/consultorio/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/consultorio/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/consultorio/buscar'>Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Datos Generales
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/datosgenerales/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/datosgenerales/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/datosgenerales/buscar'>Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Signos Vitales
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/signosvitales/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/signosvitales/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/signosvitales/buscar'>Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    APHF
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/aphf/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/aphf/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/aphf/buscar'>Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Control
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/control/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/control/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/control/buscar'>Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Expediente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/expediente/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/expediente/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/expediente/buscar'>Buscar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Citas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/cita/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/cita/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/cita/buscar'>Buscar</a>
                </div>
            </li>
                </li>
                <!-- Puedes agregar más elementos de menú según tus necesidades -->
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Resto de tu contenido -->
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-4">Exploración Física</h2>

                <!-- Tabla de Exploración Física -->
                <table class="table table-bordered table-striped text-center">
                    <!-- Cabecera de la tabla -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Número de Paciente</th>
                            <th>Escala de Dolor</th>
                            <th>Rango de Movimiento (ROM)</th>
                            <th>Fuerza Muscular</th>
                            <th>Tono Muscular</th>
                            <th>Dermatomas</th>
                            <th>Reflejos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contenido de la tabla -->
                        <?php foreach ($exploracionFisica as $exploracion) : ?>
                            <tr>
                                <td><?= ucfirst($exploracion['Paciente_ID']) ?></td>
                                <td><?= $exploracion['escalaDolor'] ?></td>
                                <td><?= $exploracion['ROM'] ?></td>
                                <td><?= $exploracion['fuerza'] ?></td>
                                <td><?= $exploracion['tonoMuscular'] ?></td>
                                <td><?= $exploracion['dermatomas'] ?></td>
                                <td><?= $exploracion['reflejos'] ?></td>
                                <td>
                                    <div class="container">
                                        <!-- Enlace para editar -->
                                        <a href="<?= base_url('exploracionfisica/editar/' . $exploracion['ID_ExploracionFisica']) ?>" class="btn btn-primary">Editar</a>

                                        <!-- Formulario para eliminar -->
                                        <form action="<?= base_url('exploracionfisica/delete/' . $exploracion['ID_ExploracionFisica']) ?>" method="POST" style="display:inline;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar estos datos de Exploración Física?')">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
                                 <!-- Botón para agregar Control -->
<div class="text-center mb-4">
    <a href="/control/agregar" class="btn btn-success">Agregar Control</a>
</div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Agrega otros scripts que puedas necesitar -->

</body>

</html>
