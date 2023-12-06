<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Servicios de Fisioterapia</title>
    <meta name="description" content="Servicios de fisioterapia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados para los beneficios */
        .beneficio {
            color: #007BFF;
        }

        .beneficio-title {
            color: #343A40;
        }

    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('/') ?>">Fisioterapia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/') ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/servicios') ?>">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/contacto') ?>">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="my-4">Servicios de Fisioterapia</h1>

        <!-- Primer Servicio: Ejemplo -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Servicio de Masajes Terapéuticos</h2>
                <p class="card-text">
                    Los masajes terapéuticos ayudan a aliviar la tensión muscular, mejorar la circulación y reducir el estrés.
                </p>
                <h4 class="beneficio-title">Beneficios:</h4>
                <ul class="beneficio">
                    <li>Alivio del dolor muscular y articular.</li>
                    <li>Relajación y reducción del estrés.</li>
                    <li>Mejora de la circulación sanguínea.</li>
                    <li>Incremento de la movilidad.</li>
                </ul>
            </div>
        </div>

        <!-- Segundo Servicio: Ejemplo -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Terapia de Ejercicio Personalizada</h2>
                <p class="card-text">
                    Nuestros fisioterapeutas diseñan programas de ejercicios personalizados para mejorar la fuerza, la flexibilidad y la movilidad.
                </p>
                <h4 class="beneficio-title">Beneficios:</h4>
                <ul class="beneficio">
                    <li>Mejora de la fuerza y la resistencia.</li>
                    <li>Aumento de la flexibilidad y la movilidad.</li>
                    <li>Rehabilitación de lesiones.</li>
                    <li>Prevención de lesiones futuras.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Botón de Regresar -->
    <div class="container text-center mt-3">
        <a href="<?= base_url('/') ?>" class="btn btn-primary">Regresar</a>
    </div>
</body>
</html>
