<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Paciente</title>
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
                    Pacientes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href='/paciente/agregar'>Agregar</a>
                    <a class="dropdown-item" href='/paciente/mostrar'>Mostrar</a>
                    <a class="dropdown-item" href='/paciente/buscar'>Buscar</a>
                </div>
            </li>
            <!-- Puedes agregar más elementos de menú según tus necesidades -->
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 form-container">
            <h2 class="form-title">Editar Paciente</h2>
            <div class="row justify-content-center result-container">
                <table class="table">
                    <tr>
                        <th>Resultado de Contacto</th>
                    </tr>
                    <tr>
                        <td><pre><?php print_r($paciente); ?></pre></td>
                    </tr>
                </table>
            </div>
            <form action="<?= base_url('/paciente/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="id" value="<?= $paciente['ID_Paciente'] ?>" />
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $paciente['nombre'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="apellidoPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoPaterno" id="apellidoPaterno" value="<?= $paciente['apellidoPaterno'] ?>" required>
                </div>

            
             
                <div class="form-group">
                    <label for="apellidoMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoMaterno" id="apellidoMaterno" value="<?= $paciente['apellidoMaterno'] ?>" required>
                </div>

                <div class="form-group">
    <label for="ine">INE</label>
    <input type="text" class="form-control" name="ine" id="ine" value="<?= $paciente['ine'] ?>"required pattern="[A-Za-z0-9]+" title="Ingresa solo letras y números, sin espacios." maxlength="8">
</div>


                <div class="form-group">
                    <label for="genero" class="form-label">Género</label>
                    <select class="form-control" name="genero" id="genero" required>
                        <option value="masculino" <?php if ($paciente['genero'] == 'masculino') echo 'selected'; ?>>Masculino</option>
                        <option value="femenino" <?php if ($paciente['genero'] == 'femenino') echo 'selected'; ?>>Femenino</option>
                    </select>
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
