<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ExploracionFisica extends BaseController
{
    public function index()
    {
        // Lógica para la página de inicio de Exploración Física
    }

    public function mostrar()
    {
        $exploracionFisicaModel = model('ExploracionFisicaModel'); // Ajusta según sea necesario
        $data['exploracionFisica'] = $exploracionFisicaModel->findAll(); // Ajusta a 'exploracionFisica'
        return
            view('common/head') .
            view('exploracionfisica/mostrar', $data) . // Ajusta a 'exploracionFisica'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('exploracionfisica/agregar') . // Ajusta a 'exploracionFisica'
            view('common/footer');
    }

    public function insert()
    {
        $exploracionFisicaModel = model('ExploracionFisicaModel'); // Ajusta según sea necesario
        $data = [
            "Paciente_ID" => $_POST['Paciente_ID'],
            "escalaDolor" => $_POST['escalaDolor'],
            "ROM" => $_POST['ROM'],
            "fuerza" => $_POST['fuerza'],
            "tonoMuscular" => $_POST['tonoMuscular'],
            "dermatomas" => $_POST['dermatomas'],
            "reflejos" => $_POST['reflejos'],
         
        ];
        $exploracionFisicaModel->insert($data, false);
        return redirect('exploracionfisica/mostrar', 'refresh'); // Ajusta a 'exploracionFisica'
    }

    public function delete($ID_ExploracionFisica)
    {
        $exploracionFisicaModel = model('ExploracionFisicaModel'); // Ajusta según sea necesario
        $exploracionFisicaModel->delete($ID_ExploracionFisica);
        return redirect('exploracionfisica/mostrar', 'refresh'); // Ajusta a 'exploracionFisica'
    }

    public function editar($ID_ExploracionFisica)
    {
        $exploracionFisicaModel = model('ExploracionFisicaModel'); // Ajusta según sea necesario
        $data['exploracionFisica'] = $exploracionFisicaModel->find($ID_ExploracionFisica); // Ajusta a 'exploracionFisica'

        return
            view('common/head') .
            view('exploracionfisica/editar', $data) . // Ajusta a 'exploracionFisica'
            view('common/footer');
    }

    public function update()
    {
        $exploracionFisicaModel = model('ExploracionFisicaModel'); // Ajusta según sea necesario
        $data = [ 
            "Paciente_ID" => $_POST['Paciente_ID'],
            "escalaDolor" => $_POST['escalaDolor'],
            "ROM" => $_POST['ROM'],
            "fuerza" => $_POST['fuerza'],
            "tonoMuscular" => $_POST['tonoMuscular'],
            "dermatomas" => $_POST['dermatomas'],
            "reflejos" => $_POST['reflejos'],
            
        ];

        $exploracionFisicaModel->update($_POST['id'], $data);
        return redirect('exploracionfisica/mostrar', 'refresh'); // Ajusta a 'exploracionFisica'
    }

    public function buscar()
    {
        $exploracionFisicaModel = model('ExploracionFisicaModel'); // Ajusta según sea necesario
        if (isset($_GET['Paciente_ID'])) {
            $pacienteID = $_GET['Paciente_ID'];
            $data['exploracionFisica'] = $exploracionFisicaModel
                ->where('Paciente_ID', $pacienteID)
                ->findAll();
        } else {
            $pacienteID = "";
            $data['exploracionFisica'] = $exploracionFisicaModel->findAll(); // Ajusta a 'exploracionFisica'
        }

        return
            view('common/head') .
            view('exploracionfisica/buscar', $data) . // Ajusta a 'exploracionFisica'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de
    }
    }