<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SignosVitales extends BaseController
{
    public function index()
    {
        // Lógica para la página de inicio de Signos Vitales
    }

    public function mostrar()
    {
        $signosVitalesModel = model('SignosVitalesModel'); // Ajusta según sea necesario
        $data['signosVitales'] = $signosVitalesModel->findAll(); // Ajusta a 'signosVitales'
        return
            view('common/head') .
            view('signosvitales/mostrar', $data) . // Ajusta a 'signosvitales'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('signosvitales/agregar') . // Ajusta a 'signosvitales'
            view('common/footer');
    }

    public function insert()
    {
        $signosVitalesModel = model('SignosVitalesModel'); // Ajusta según sea necesario
        $data = [
            "Paciente_ID" => $_POST['Paciente_ID'],
            "presionArterial" => $_POST['presionArterial'],
            "frecuenciaCardiaca" => $_POST['frecuenciaCardiaca'],
            "tensionArterial" => $_POST['tensionArterial'],
            "saturacionOxigeno" => $_POST['saturacionOxigeno'],
            "temperatura" => $_POST['temperatura'],
        ];
        $signosVitalesModel->insert($data, false);
        return redirect('signosvitales/mostrar', 'refresh'); // Ajusta a 'signosVitales'
    }

    public function delete($ID_SignosVitales)
    {
        $signosVitalesModel = model('SignosVitalesModel'); // Ajusta según sea necesario
        $signosVitalesModel->delete($ID_SignosVitales);
        return redirect('signosvitales/mostrar', 'refresh'); // Ajusta a 'signosVitales'
    }

    public function editar($ID_SignosVitales)
    {
        $signosVitalesModel = model('SignosVitalesModel'); // Ajusta según sea necesario
        $data['signosVitales'] = $signosVitalesModel->find($ID_SignosVitales); // Ajusta a 'signosVitales'

        return
            view('common/head') .
            view('signosvitales/editar', $data) . // Ajusta a 'signosVitales'
            view('common/footer');
    }

    public function update()
    {
        $signosVitalesModel = model('SignosVitalesModel'); // Ajusta según sea necesario
        $data = [
            "Paciente_ID" => $_POST['Paciente_ID'],
            "presionArterial" => $_POST['presionArterial'],
            "frecuenciaCardiaca" => $_POST['frecuenciaCardiaca'],
            "tensionArterial" => $_POST['tensionArterial'],
            "saturacionOxigeno" => $_POST['saturacionOxigeno'],
            "temperatura" => $_POST['temperatura'],
        ];

        $signosVitalesModel->update($_POST['id'], $data);
        return redirect('signosvitales/mostrar', 'refresh'); // Ajusta a 'signosVitales'
    }

    

    public function buscar()
    {
        $signosVitalesModel = model('SignosVitalesModel'); // Ajusta según sea necesario
        // Aquí, ajusta según la lógica de búsqueda que necesites para Signos Vitales
        if (isset($_GET['Paciente_ID'])) {
            $presionArterial = $_GET['Paciente_ID'];
            $data['signosVitales'] = $signosVitalesModel
                ->like('Paciente_ID', $Paciente_ID)
                ->findAll();
        } else {
            $presionArterial = "";
            $data['signosVitales'] = $signosVitalesModel->findAll(); // Ajusta a 'signosVitales'
        }

        return
            view('common/head') .
            view('signosvitales/buscar', $data) . // Ajusta a 'signosVitales'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de signos vitales
    }
}
