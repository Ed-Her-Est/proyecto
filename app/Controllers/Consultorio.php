<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Consultorio extends BaseController
{
    public function index()
    {
        // Lógica para la página de inicio del consultorio
    }

    public function mostrar()
    {
        $consultorioModel = model('ConsultorioModel'); // Ajusta según sea necesario
        $data['consultorios'] = $consultorioModel->findAll(); // Ajusta a 'consultorios'
        return
            view('common/head') .
            view('consultorio/mostrar', $data) . // Ajusta a 'consultorio'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('consultorio/agregar') . // Ajusta a 'consultorio'
            view('common/footer');
    }

    public function insert()
    {
        $consultorioModel = model('ConsultorioModel'); // Ajusta según sea necesario
        $data = [
            "estatus" => $_POST['estatus'],
            "numeroConsultorio" => $_POST['numeroConsultorio'],
            // Ajusta los campos según tu tabla de consultorio
        ];
        $consultorioModel->insert($data, false);
        return redirect('consultorio/mostrar', 'refresh'); // Ajusta a 'consultorio'
    }

    public function delete($ID_Consultorio)
    {
        $consultorioModel = model('ConsultorioModel'); // Ajusta según sea necesario
        $consultorioModel->delete($ID_Consultorio);
        return redirect('consultorio/mostrar', 'refresh'); // Ajusta a 'consultorio'
    }

    public function editar($ID_Consultorio)
    {
        $consultorioModel = model('ConsultorioModel'); // Ajusta según sea necesario
        $data['consultorio'] = $consultorioModel->find($ID_Consultorio); // Ajusta a 'consultorio'

        return
            view('common/head') .
            view('consultorio/editar', $data) . // Ajusta a 'consultorio'
            view('common/footer');
    }

    public function update()
    {
        $consultorioModel = model('ConsultorioModel'); // Ajusta según sea necesario
        $data = [
            "estatus" => $_POST['estatus'],
            
            "numeroConsultorio" => $_POST['numeroConsultorio'], 
            // Ajusta los campos según tu tabla de consultorio
        ];

        // Verifica si otros campos están presentes antes de intentar acceder a ellos
        // ...

        $consultorioModel->update($_POST['id'], $data);
        return redirect('consultorio/mostrar', 'refresh'); // Ajusta a 'consultorio'
    }

    public function buscar()
    {
        $consultorioModel = model('ConsultorioModel'); // Ajusta según sea necesario
        if (isset($_GET['estatus'])) {
            $estatus = $_GET['estatus'];
            $data['consultorios'] = $consultorioModel
                ->like('estatus', $estatus)
                ->findAll();
        } else {
            $estatus = "";
            $data['consultorios'] = $consultorioModel->findAll(); // Ajusta a 'consultorios'
        }

        return
            view('common/head') .
            view('consultorio/buscar', $data) . // Ajusta a 'consultorio'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de consultorios
    }
}
