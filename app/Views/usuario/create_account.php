<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 3% 0;
        }
        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
    </style>
    <script>
    document.getElementById('regresar').addEventListener('click', function() {
        window.location.href = '<?= site_url('/') ?>';
    });
</script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1>Crear Cuenta</h1>

                <form action="<?= base_url('/cuenta') ?>" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_paterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="apellido_materno" class="form-label">Apellido Materno:</label>
                        <input type="text" name="apellido_materno" id="apellido_materno" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de Usuario:</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="tel" name="telefono" id="telefono" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Cuenta</button>
                    <li class="nav-item">
    <a class="nav-link" href="<?= base_url('/') ?>">Regresar</a>
</li>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
