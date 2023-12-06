<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar APHF</title>
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 form-container">
                <h2 class="form-title">Editar APHF</h2>
                <div class="row justify-content-center result-container">
                    <table class="table">
                        <tr>
                            <th>Resultado de Contacto</th>
                        </tr>
                        <tr>
                            <td><pre><?php print_r($aphf); ?></pre></td>
                        </tr>
                    </table>
                </div>
                <form action="<?= base_url('/aphf/update'); ?>" method="POST">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id" value="<?= $aphf['ID_APHF'] ?>" />

                    <div class="mb-3">
                            <label for="Paciente_ID" class="form-label">Número de Paciente_ID</label>
                            <input type="number" class="form-control" name="Paciente_ID" id="Paciente_ID" required>
                        </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="diabetes" name="diabetes" <?= $aphf['diabetes'] ? 'checked' : '' ?>>
                        <label class="form-check-label" for="diabetes">Diabetes</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="HTA" name="HTA" <?= $aphf['HTA'] ? 'checked' : '' ?>>
                        <label class="form-check-label" for="HTA">HTA</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="cardioPatia" name="cardioPatia" <?= $aphf['cardioPatia'] ? 'checked' : '' ?>>
                        <label class="form-check-label" for="cardioPatia">Cardiopatía</label>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="enfReumaticas" name="enfReumaticas" <?= $aphf['enfReumaticas'] ? 'checked' : '' ?>>
                        <label class="form-check-label" for="enfReumaticas">Enfermedades Reumáticas</label>
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
