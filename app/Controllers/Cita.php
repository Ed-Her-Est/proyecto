<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cita extends BaseController
{
    public function index()
    {
        // Lógica para la página de inicio de citas
    }

    public function mostrar()
    {
        $citaModel = model('CitaModel'); // Ajusta según sea necesario
        $data['citas'] = $citaModel->findAll(); // Ajusta a 'citas'
        return
            view('common/head') .
            view('cita/mostrar', $data) . // Ajusta a 'cita'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('cita/agregar') . // Ajusta a 'cita'
            view('common/footer');
    }

    public function insert()
    {
        $citaModel = model('CitaModel'); // Ajusta según sea necesario
        $data = [
            "fecha" => $_POST['fecha'],
            "numConsultorio" => $_POST['numConsultorio'],
            "fisioterapeuta_ID" => $_POST['fisioterapeuta_ID'],
            "Paciente_ID" => $_POST['Paciente_ID'],
            "Consultorio_ID" => $_POST['Consultorio_ID'],
        ];
        $citaModel->insert($data, false);
        return redirect('cita/mostrar', 'refresh'); // Ajusta a 'cita'
    }

    public function delete($id)
    {
        $citaModel = model('CitaModel'); // Ajusta según sea necesario
        $citaModel->delete($id);
        return redirect('cita/mostrar', 'refresh'); // Ajusta a 'cita'
    }

    public function editar($id)
    {
        $citaModel = model('CitaModel'); // Ajusta según sea necesario
        $data['cita'] = $citaModel->find($id); // Ajusta a 'cita'

        return
            view('common/head') .
            view('cita/editar', $data) . // Ajusta a 'cita'
            view('common/footer');
    }

    public function update()
    {
        $citaModel = model('CitaModel'); // Ajusta según sea necesario
        $data = [
            "fecha" => $_POST['fecha'],
            "numConsultorio" => $_POST['numConsultorio'],
            "fisioterapeuta_ID" => $_POST['fisioterapeuta_ID'],
            "Paciente_ID" => $_POST['Paciente_ID'],
            "Consultorio_ID" => $_POST['Consultorio_ID'],
        ];

        $citaModel->update($_POST['id'], $data);
        return redirect('cita/mostrar', 'refresh'); // Ajusta a 'cita'
    }

    public function buscar()
    {
        $citaModel = model('CitaModel'); // Ajusta según sea necesario
        if (isset($_GET['fecha'])) {
            $fecha = $_GET['fecha'];
            $data['citas'] = $citaModel->like('fecha', $fecha)->findAll(); // Ajusta a 'citas'
        } else {
            $fecha = "";
            $data['citas'] = $citaModel->findAll(); // Ajusta a 'citas'
        }

        return
            view('common/head') .
            view('cita/buscar', $data) . // Ajusta a 'cita'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de citas
    }
}
