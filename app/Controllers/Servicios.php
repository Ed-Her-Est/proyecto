<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Servicios extends BaseController
{
    public function index()
    {
        return view('/servicios');// Lógica para mostrar la página principal de servicios
    }

    public function mostrar()
    {
        // Lógica para mostrar la lista de servicios
    }

    public function agregar()
    {
        // Lógica para mostrar el formulario de agregar un servicio
    }

    public function insert()
    {
        // Lógica para insertar un servicio en la base de datos
    }

    public function delete($id)
    {
        // Lógica para eliminar un servicio
    }

    public function editar($id)
    {
        // Lógica para mostrar el formulario de edición de un servicio
    }

    public function update()
    {
        // Lógica para actualizar un servicio en la base de datos
    }

    public function buscar()
    {
        // Lógica para buscar servicios
    }

    public function estadistica()
    {
        // Lógica para mostrar estadísticas de servicios
    }
}
