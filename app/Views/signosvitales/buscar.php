<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Signos Vitales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega otros enlaces a tus estilos o scripts si es necesario -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px; /* Agregado margen inferior */
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
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
                    Exploracion Fisica
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/exploracionfisica/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/exploracionfisica/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/exploracionfisica/buscar'>Buscar</a>
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
                <!-- Puedes agregar más elementos de menú según tus necesidades -->
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="form-title">Buscar Signos Vitales</h2>
                <form action="<?= base_url('index.php/signosvitales/buscar/'); ?>" method="GET">
                    <div class="form-group">
                        <label for="nombre">Numero de Paciente</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                   
                    <input type="submit" class="btn btn-success mt-4" value="Buscar">
                </form>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Nuevo contenedor para la información -->
                <!-- Tabla de signos vitales con clases de Bootstrap -->
                <table class="table table-bordered table-striped text-center">
                    <!-- Cabecera de la tabla con estilo dark de Bootstrap -->
                    <thead class="thead-dark">
                        <tr>
                            <th>Numero de paciente</th>
                           
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($signosVitales as $signo) : ?>
                            <tr>
                                <td><?= $signo['Paciente_ID'] ?></td>
                                <td>
                                    <!-- Enlace para editar con botón de Bootstrap -->
                                    <a href="<?= base_url('signosvitales/editar/' . $signo['ID_SignosVitales']) ?>" class="btn btn-primary btn-sm">Editar</a>

                                    <!-- Formulario para eliminar con botón de Bootstrap -->
                                    <form action="<?= base_url('signosvitales/eliminar/' . $signo['ID_SignosVitales']) ?>" method="POST" style="display:inline;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar estos signos vitales?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
