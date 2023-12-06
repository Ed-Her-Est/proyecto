<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
    }

    form {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-bottom: 20px;
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

    .btn-primary {
        background-color: #007bff;
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
    <div class="row">
        <div class="col"></div>
        <div class="col">
<form action="<?php base_url('user/login'); ?>" method="POST">
<?= csrf_field() ?>
  <div class="mb-3">
    <label for="usuario" class="form-label">Usuario </label>
    <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usuarioHelp">
    <div id="usuarioHelp" class="form-text">We'll never share your Usuario with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="contrasenia" class="form-label">contraseña</label>
    <input type="password" class="form-control" id="contrasenia" name="contrasenia">
  </div>

  <button type="submit" class="btn btn-primary">Acceder</button>
</form>
        </div>
        <div class="col"></div>
    </div>
</div>


</body>
</html>
