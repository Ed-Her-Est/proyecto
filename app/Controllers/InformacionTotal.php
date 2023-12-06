<?php

namespace App\Controllers;

use App\Models\PacienteModel;
use App\Models\FisioterapeutaModel;
use App\Models\ControlModel;

class InformacionTotal extends BaseController
{
    public function mostrar()
    {
        // Cargar modelos
        $pacienteModel = new PacienteModel();
        $fisioterapeutaModel = new FisioterapeutaModel();
        $controlModel = new ControlModel();

        // Obtener datos de las tablas
        $data['pacientes'] = $pacienteModel->findAll();
        $data['fisioterapeutas'] = $fisioterapeutaModel->findAll();
        $data['controles'] = $controlModel->findAll();

        // Cargar vista con la información
        return view('informaciontotal/mostrar', $data);
    }
}
