<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Exploración Física</title>
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
                        Exploración Física
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href='/exploracionfisica/agregar'>Agregar</a>
                        <a class="dropdown-item" href='/exploracionfisica/mostrar'>Mostrar</a>
                        <a class="dropdown-item" href='/exploracionfisica/buscar'>Buscar</a>
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
                <!-- Puedes agregar más elementos de menú según tus necesidades -->
            </ul>
        </div>
    </nav>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="form-title">Agregar Exploración Física</h2>
                <form action="<?= base_url('index.php/exploracionfisica/insert'); ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="container">
                    <div class="mb-3">
                        
                    <div class="mb-3">
    <label for="Paciente_ID" class="form-label">Número de Paciente_ID</label>
    <input type="number" class="form-control" name="Paciente_ID" id="Paciente_ID" required min="1" max="99999">
    <!-- Establece los límites según la lógica de tu aplicación -->
</div>

<div class="mb-3">
    <label for="escalaDolor" class="form-label">Escala de Dolor</label>
    <input type="number" class="form-control" name="escalaDolor" id="escalaDolor" required min="0" max="10">
    <!-- Escala de dolor típicamente va de 0 a 10 -->
</div>

<div class="mb-3">
    <label for="ROM" class="form-label">Rango de Movimiento (ROM)</label>
    <input type="text" class="form-control" name="ROM" id="ROM" required maxlength="3">
    <!-- Establece la longitud máxima según tus necesidades -->
</div>

<div class="mb-3">
    <label for="fuerza" class="form-label">Fuerza Muscular</label>
    <input type="text" class="form-control" name="fuerza" id="fuerza" required maxlength="255">
    <!-- Establece la longitud máxima según tus necesidades -->
</div>

<div class="mb-3">
    <label for="tonoMuscular" class="form-label">Tono Muscular</label>
    <input type="text" class="form-control" name="tonoMuscular" id="tonoMuscular" required maxlength="255">
    <!-- Establece la longitud máxima según tus necesidades -->
</div>

<div class="mb-3">
    <label for="dermatomas" class="form-label">Dermatomas</label>
    <input type="text" class="form-control" name="dermatomas" id="dermatomas" required maxlength="255">
    <!-- Establece la longitud máxima según tus necesidades -->
</div>

<div class="mb-3">
    <label for="reflejos" class="form-label">Reflejos</label>
    <input type="text" class="form-control" name="reflejos" id="reflejos" required maxlength="255">
    <!-- Establece la longitud máxima según tus necesidades -->
</div>


                       
                        <div class="mb-3">
                            <input type="submit" class="btn btn-success" value="Agregar Exploración Física">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
