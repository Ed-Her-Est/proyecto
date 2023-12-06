<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos Generales</title>
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
                        Datos Generales
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href='/datosgenerales/agregar'>Agregar</a>
                        <a class="dropdown-item" href='/datosgenerales/mostrar'>Mostrar</a>
                        <a class="dropdown-item" href='/datosgenerales/buscar'>Buscar</a>
                    </div>
                </li>
                <!-- Puedes agregar más elementos de menú según tus necesidades -->
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="form-title">Editar Datos Generales</h2>
                <div class="row justify-content-center result-container">
                    <table class="table">
                        <tr>
                            <th>Resultado de Contacto</th>
                        </tr>
                        <tr>
                            <td><pre><?php print_r($datosGenerales); ?></pre></td>
                        </tr>
                    </table>
                </div>
                <form action="<?= base_url('/datosgenerales/update'); ?>" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id" value="<?= $datosGenerales['ID_DatosGenerales'] ?>" />
                    <div class="form-group">
                            <label for="Paciente_ID">Id de Paciente</label>
                            <input type="number" class="form-control" name="Paciente_ID" id="Paciente_ID" value="<?= $datosGenerales['Paciente_ID'] ?>"required>
                        </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $datosGenerales['nombre'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="domicilio">Domicilio</label>
                        <input type="text" class="form-control" name="domicilio" id="domicilio" value="<?= $datosGenerales['domicilio'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="numeroEmergencia">Número de Emergencia</label>
                        <input type="tel" class="form-control" name="numeroEmergencia" id="numeroEmergencia" value="<?= $datosGenerales['numeroEmergencia'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" name="edad" id="edad" value="<?= $datosGenerales['edad'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="estatura">Estatura</label>
                        <input type="number" class="form-control" name="estatura" id="estatura" value="<?= $datosGenerales['estatura'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="number" class="form-control" name="peso" id="peso" value="<?= $datosGenerales['peso'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="estadoCivil">Estado Civil</label>
                        <input type="text" class="form-control" name="estadoCivil" id="estadoCivil" value="<?= $datosGenerales['estadoCivil'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="escolaridad">Escolaridad</label>
                        <input type="text" class="form-control" name="escolaridad" id="escolaridad" value="<?= $datosGenerales['escolaridad'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="religion">Religión</label>
                        <input type="text" class="form-control" name="religion" id="religion" value="<?= $datosGenerales['religion'] ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="motivoConsulta">Motivo de Consulta</label>
                        <textarea class="form-control" name="motivoConsulta" id="motivoConsulta" required><?= $datosGenerales['motivoConsulta'] ?></textarea>
                    </div>

                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-success">
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
