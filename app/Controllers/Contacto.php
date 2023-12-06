<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contacto extends BaseController
{
    public function index()
    {
        return view('/Contacto'); // Lógica para mostrar la página de contacto
    }

    public function informacion()
    {
        // Lógica para mostrar información de contacto
    }

    public function formulario()
    {
        // Lógica para mostrar un formulario de contacto
    }

    public function enviarMensaje()
    {
        // Lógica para procesar el envío de mensajes de contacto
    }
}
