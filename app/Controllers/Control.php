<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Control extends BaseController
{
    
    public function index()
    {
       
    }

    public function mostrar()
    {
        $controlModel = model('ControlModel'); // Ajusta según sea necesario
        $data['controles'] = $controlModel->findAll(); // Ajusta a 'controles'
        return
            view('common/head') .
            view('control/mostrar', $data) . // Ajusta a 'control'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('control/agregar') . // Ajusta a 'control'
            view('common/footer');
    }

    public function insert()
    {
        $controlModel = model('ControlModel'); // Ajusta según sea necesario
        $data = [
            "fechaConsulta" => $_POST['fechaConsulta'],
            "telefono" => $_POST['telefono'],
            "Paciente_ID" => $_POST['Paciente_ID'],
            "Consultorio_ID" => $_POST['Consultorio_ID'],
        ];
        $controlModel->insert($data, false);
        return redirect('control/mostrar', 'refresh'); // Ajusta a 'control'
    }

    public function delete($ID_Control)
    {
        $controlModel = model('ControlModel'); // Ajusta según sea necesario
        $controlModel->delete($ID_Control);
        return redirect('control/mostrar', 'refresh'); // Ajusta a 'control'
    }

    public function editar($ID_Control)
    {
        $controlModel = model('ControlModel'); // Ajusta según sea necesario
        $data['control'] = $controlModel->find($ID_Control); // Ajusta a 'control'

        return
            view('common/head') .
            view('control/editar', $data) . // Ajusta a 'control'
            view('common/footer');
    }

    public function update()
    {
        $controlModel = model('ControlModel'); // Ajusta según sea necesario
        $data = [
            "fechaConsulta" => $_POST['fechaConsulta'],
            "telefono" => $_POST['telefono'],
            "Paciente_ID" => $_POST['Paciente_ID'],
            "Consultorio_ID" => $_POST['Consultorio_ID'],
        ];

        $controlModel->update($_POST['id'], $data);
        return redirect('control/mostrar', 'refresh'); // Ajusta a 'control'
    }

    public function buscar()
    {
        $controlModel = model('ControlModel'); // Ajusta según sea necesario
        if (isset($_GET['fechaConsulta'])) {
            $fechaConsulta = $_GET['fechaConsulta'];
            $telefono = $_GET['telefono'];
            $data['controles'] = $controlModel
                ->like('fechaConsulta', $fechaConsulta)
                ->like('telefono', $telefono)
                ->findAll();
        } else {
            $fechaConsulta = "";
            $data['controles'] = $controlModel->findAll(); // Ajusta a 'controles'
        }

        return
            view('common/head') .
            view('control/buscar', $data) . // Ajusta a 'control'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de controles
    }
}
