<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <meta name="description" content="Formas de contactar el consultorio de fisioterapia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        .contact-info {
            font-size: 18px;
            margin-bottom: 20px;
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
            <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/') ?>">Inicio</a>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/servicios') ?>">Servicios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('/contacto') ?>">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="my-4">Formas de Contactar el Consultorio de Fisioterapia</h1>

        <div class="contact-info">
            <h4>Dirección:</h4>
            <p>123 Calle Principal, Ciudad Principal, CP 12345</p>
        </div>

        <div class="contact-info">
            <h4>Teléfono:</h4>
            <p>(123) 456-7890</p>
        </div>

        <div class="contact-info">
            <h4>Correo Electrónico:</h4>
            <p>info@consultoriofisio.com</p>
        </div>

        <div class="contact-info">
            <h4>Horario de Atención:</h4>
            <p>Lunes a Viernes: 8:00 AM - 6:00 PM</p>
            <p>Sábados: 9:00 AM - 2:00 PM</p>
        </div>
    </div>

    <!-- Botón de Regresar -->
    <div class="container text-center mt-3">
        <a href="<?= base_url('/') ?>" class="btn btn-primary">Regresar</a>
    </div>
</body>
</html>
