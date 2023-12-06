<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Fisioterapeuta extends BaseController
{
    
        public function index()
        {
           
        }

    public function mostrar()
    {
        $fisioterapeutaModel = model('FisioterapeutaModel'); // Ajusta según sea necesario
        $data['fisioterapeutas'] = $fisioterapeutaModel->findAll(); // Ajusta a 'fisioterapeutas'
        return
            view('common/head') .
            view('fisioterapeuta/mostrar', $data) . // Ajusta a 'fisioterapeuta'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('fisioterapeuta/agregar') . // Ajusta a 'fisioterapeuta'
            view('common/footer');
    }

    public function insert()
    {
        $fisioterapeutaModel = model('FisioterapeutaModel'); // Ajusta según sea necesario
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "usuario" => $_POST['usuario'],
            "contrasenia" => $_POST['contrasenia'],
            "genero" => $_POST['genero'],
            "telefono" => $_POST['telefono'],
        ];
        $fisioterapeutaModel->insert($data, false);
        return redirect('fisioterapeuta/mostrar', 'refresh'); // Ajusta a 'fisioterapeuta'
    }

    public function delete($ID_Fisioterapeuta)
    {
        $fisioterapeutaModel = model('FisioterapeutaModel'); // Ajusta según sea necesario
        $fisioterapeutaModel->delete($ID_Fisioterapeuta);
        return redirect('fisioterapeuta/mostrar', 'refresh'); // Ajusta a 'fisioterapeuta'
    }

    public function editar($ID_Fisioterapeuta)
    {
        $fisioterapeutaModel = model('FisioterapeutaModel'); // Ajusta según sea necesario
        $data['fisioterapeuta'] = $fisioterapeutaModel->find($ID_Fisioterapeuta); // Ajusta a 'fisioterapeuta'

        return
            view('common/head') .
            view('fisioterapeuta/editar', $data) . // Ajusta a 'fisioterapeuta'
            view('common/footer');
    }

    public function update()
    {
        $fisioterapeutaModel = model('FisioterapeutaModel'); // Ajusta según sea necesario
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "usuario" => $_POST['usuario'],
            "contrasenia" => $_POST['contrasenia'],
            "genero" => $_POST['genero'],
            "telefono" => $_POST['telefono'],
        ];

        // Verifica si 'email' está presente antes de intentar acceder a él
        if (isset($_POST['telefono'])) {
            $data["telefono"] = $_POST['telefono'];
        }

        $fisioterapeutaModel->update($_POST['id'], $data);
        return redirect('fisioterapeuta/mostrar', 'refresh'); // Ajusta a 'fisioterapeuta'
    }

    public function buscar()
    {
        $fisioterapeutaModel = model('FisioterapeutaModel'); // Ajusta según sea necesario
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $email = $_GET['usuario'];
            $data['fisioterapeutas'] = $fisioterapeutaModel
                ->like('nombre', $nombre)
                ->like('usuario', $usuario)
                ->findAll();
        } else {
            $nombre = "";
            $data['fisioterapeutas'] = $fisioterapeutaModel->findAll(); // Ajusta a 'fisioterapeutas'
        }

        return
            view('common/head') .
            view('fisioterapeuta/buscar', $data) . // Ajusta a 'fisioterapeuta'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de fisioterapeutas
    }
}
