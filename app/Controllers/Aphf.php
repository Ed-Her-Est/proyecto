<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Aphf extends BaseController
{
    public function index()
    {
        // Lógica para la página de inicio de APHF
    }
/* mostrar()

        Obtiene todos los registros de la base de datos a través del modelo AphfModel.
        Pasa los datos recuperados a la vista aphf/mostrar.
        Retorna la vista completa, incluyendo la cabeza común (common/head) y el pie de página (common/footer).**/
    public function mostrar()
    {
        $aphfModel = model('AphfModel');  
        $data['aphf'] = $aphfModel->findAll(); // Ajusta a 'aphf'
        return
            view('common/head') .
            view('aphf/mostrar', $data) . // Ajusta a 'aphf'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('aphf/agregar') . // Ajusta a 'aphf'
            view('common/footer');
    }

    public function insert()
    {
        $aphfModel = model('AphfModel'); // Ajusta según sea necesario
        $data = [
            "Paciente_ID" => $_POST['Paciente_ID'],
            "diabetes" => isset($_POST['diabetes']) ? true : false,
            "HTA" => isset($_POST['HTA']) ? true : false,
            "cardioPatia" => isset($_POST['cardioPatia']) ? true : false,
            "enfReumaticas" => isset($_POST['enfReumaticas']) ? true : false,
        ];
        $aphfModel->insert($data, false);
        return redirect('aphf/mostrar', 'refresh'); // Ajusta a 'aphf'
    }

    public function delete($ID_Aphf)
    {
        $aphfModel = model('AphfModel'); // Ajusta según sea necesario
        $aphfModel->delete($ID_Aphf);
        return redirect('aphf/mostrar', 'refresh'); // Ajusta a 'aphf'
    }

    public function editar($ID_Aphf)
    {
        $aphfModel = model('AphfModel'); // Ajusta según sea necesario
        $data['aphf'] = $aphfModel->find($ID_Aphf); // Ajusta a 'aphf'

        return
            view('common/head') .
            view('aphf/editar', $data) . // Ajusta a 'aphf'
            view('common/footer');
    }

    public function update()
    {
        $aphfModel = model('AphfModel'); // Ajusta según sea necesario
        $data = [
            "Paciente_ID" => $_POST['Paciente_ID'],
            "diabetes" => isset($_POST['diabetes']) ? true : false,
            "HTA" => isset($_POST['HTA']) ? true : false,
            "cardioPatia" => isset($_POST['cardioPatia']) ? true : false,
            "enfReumaticas" => isset($_POST['enfReumaticas']) ? true : false,
        ];

        $aphfModel->update($_POST['id'], $data);
        return redirect('aphf/mostrar', 'refresh'); // Ajusta a 'aphf'
    }

    public function buscar()
    {
        $aphfModel = model('AphfModel'); // Ajusta según sea necesario
        if (isset($_GET['Paciente_ID'])) {
            $pacienteID = $_GET['Paciente_ID'];
            $data['aphf'] = $aphfModel
                ->where('Paciente_ID', $pacienteID)
                ->findAll();
        } else {
            $pacienteID = "";
            $data['aphf'] = $aphfModel->findAll(); // Ajusta a 'aphf'
        }

        return
            view('common/head') .
            view('aphf/buscar', $data) . // Ajusta a 'aphf'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de APHF
    }
}
