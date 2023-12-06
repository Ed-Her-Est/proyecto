<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de Citas</title>
    <meta name="description" content="Listado de citas de fisioterapia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Listado de Citas</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Nombre del Paciente</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí puedes iterar sobre las citas y mostrar cada una en una fila de la tabla -->
                <?php foreach ($citas as $cita): ?>
                    <tr>
                        <td><?= $cita->id ?></td>
                        <td><?= $cita->fecha ?></td>
                        <td><?= $cita->hora ?></td>
                        <td><?= $cita->nombre_paciente ?></td>
                        <td><?= $cita->estado ?></td>
                        <td>
                            <a href="<?= base_url('citas/editar/' . $cita->id) ?>" class="btn btn-primary">Editar</a>
                            <a href="<?= base_url('citas/borrar/' . $cita->id) ?>" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
