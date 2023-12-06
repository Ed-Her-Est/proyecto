<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Expediente extends BaseController
{

    public function index()
    {
        // Lógica para la página de inicio de Expediente
    }

    public function mostrar()
    {
        $expedienteModel = model('ExpedienteModel'); // Ajusta según sea necesario
        $data['expedientes'] = $expedienteModel->findAll(); // Ajusta a 'expedientes'
        return
            view('common/head') .
            view('expediente/mostrar', $data) . // Ajusta a 'expediente'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('expediente/agregar') . // Ajusta a 'expediente'
            view('common/footer');
    }

    public function insert()
    {
        $expedienteModel = model('ExpedienteModel'); // Ajusta según sea necesario
        $data = [
            "numExpediente"=> $_POST['numExpediente'],
            "fechaIngreso" => $_POST['fechaIngreso'],
            "Paciente_ID" => $_POST['Paciente_ID'],
            "Consultorio_ID" => $_POST['Consultorio_ID'],
        ];
        $expedienteModel->insert($data, false);
        return redirect('expediente/mostrar', 'refresh'); // Ajusta a 'expediente'
    }

    public function delete($ID_Expediente)
    {
        $expedienteModel = model('ExpedienteModel'); // Ajusta según sea necesario
        $expedienteModel->delete($ID_Expediente);
        return redirect('expediente/mostrar', 'refresh'); // Ajusta a 'expediente'
    }

    public function editar($ID_Expediente)
    {
        $expedienteModel = model('ExpedienteModel'); // Ajusta según sea necesario
        $data['expediente'] = $expedienteModel->find($ID_Expediente); // Ajusta a 'expediente'

        return
            view('common/head') .
            view('expediente/editar', $data) . // Ajusta a 'expediente'
            view('common/footer');
    }

    public function update()
    {
        $expedienteModel = model('ExpedienteModel'); // Ajusta según sea necesario
        $data = [
            "numExpediente"=> $_POST['numExpediente'],
            "fechaIngreso" => $_POST['fechaIngreso'],
            "Paciente_ID" => $_POST['Paciente_ID'],
            "Consultorio_ID" => $_POST['Consultorio_ID'],
        ];

        $expedienteModel->update($_POST['id'], $data);
        return redirect('expediente/mostrar', 'refresh'); // Ajusta a 'expediente'
    }

    public function buscar()
    {
        $expedienteModel = model('ExpedienteModel'); // Ajusta según sea necesario
        if (isset($_GET['numExpediente'])) {
            $numExpediente = $_GET['numExpediente'];
            $data['expedientes'] = $expedienteModel
                ->where('numExpediente', $numExpediente)
                ->findAll();
        } else {
            $numExpediente = "";
            $data['expedientes'] = $expedienteModel->findAll(); // Ajusta a 'expedientes'
        }

        return
            view('common/head') .
            view('expediente/buscar', $data) . // Ajusta a 'expediente'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de expedientes
    }
}
