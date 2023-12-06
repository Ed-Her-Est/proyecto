<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DatosGenerales extends BaseController
{
    public function index()
    {
        // Lógica para la página de inicio de Datos Generales
    }

    public function mostrar()
    {
        $datosGeneralesModel = model('DatosGeneralesModel'); // Ajusta según sea necesario
        $data['datosGenerales'] = $datosGeneralesModel->findAll(); // Ajusta a 'datosGenerales'
        return
            view('common/head') .
            view('datosgenerales/mostrar', $data) . // Ajusta a 'datosgenerales'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            view('datosgenerales/agregar') . // Ajusta a 'datosgenerales'
            view('common/footer');
    }

    public function insert()
    {
        $datosGeneralesModel = model('DatosGeneralesModel'); // Ajusta según sea necesario
        $data = [
            "Paciente_ID" => $_POST['Paciente_ID'],
            "nombre" => $_POST['nombre'],
            "domicilio" => $_POST['domicilio'],
            "numeroEmergencia" => $_POST['numeroEmergencia'],
            "edad" => $_POST['edad'],
            "estatura" => $_POST['estatura'],
            "peso" => $_POST['peso'],
            "estadoCivil" => $_POST['estadoCivil'],
            "escolaridad" => $_POST['escolaridad'],
            "religion" => $_POST['religion'],
            "motivoConsulta" => $_POST['motivoConsulta'],
        ];
        $datosGeneralesModel->insert($data, false);
        return redirect('datosgenerales/mostrar', 'refresh'); // Ajusta a 'datosgenerales'
    }

    public function delete($ID_DatosGenerales)
    {
        $datosGeneralesModel = model('DatosGeneralesModel'); // Ajusta según sea necesario
        $datosGeneralesModel->delete($ID_DatosGenerales);
        return redirect('datosgenerales/mostrar', 'refresh'); // Ajusta a 'datosgenerales'
    }

    public function editar($ID_DatosGenerales)
    {
        $datosGeneralesModel = model('DatosGeneralesModel'); // Ajusta según sea necesario
        $data['datosGenerales'] = $datosGeneralesModel->find($ID_DatosGenerales); // Ajusta a 'datosgenerales'

        return
            view('common/head') .
            view('datosgenerales/editar', $data) . // Ajusta a 'datosgenerales'
            view('common/footer');
    }

    public function update()
    {
        $datosGeneralesModel = model('DatosGeneralesModel'); // Ajusta según sea necesario
        $data = [
            "Paciente_ID" => $_POST['Paciente_ID'],
            "nombre" => $_POST['nombre'],
            "domicilio" => $_POST['domicilio'],
            "numeroEmergencia" => $_POST['numeroEmergencia'],
            "edad" => $_POST['edad'],
            "estatura" => $_POST['estatura'],
            "peso" => $_POST['peso'],
            "estadoCivil" => $_POST['estadoCivil'],
            "escolaridad" => $_POST['escolaridad'],
            "religion" => $_POST['religion'],
            "motivoConsulta" => $_POST['motivoConsulta'],
        ];

        $datosGeneralesModel->update($_POST['id'], $data);
        return redirect('datosgenerales/mostrar', 'refresh'); // Ajusta a 'datosgenerales'
    }

    public function buscar()
    {
        $datosGeneralesModel = model('DatosGeneralesModel'); // Ajusta según sea necesario
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $data['datosGenerales'] = $datosGeneralesModel
                ->like('nombre', $nombre)
                ->findAll();
        } else {
            $nombre = "";
            $data['datosGenerales'] = $datosGeneralesModel->findAll(); // Ajusta a 'datosgenerales'
        }

        return
            view('common/head') .
            view('datosgenerales/buscar', $data) . // Ajusta a 'datosgenerales'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de datos generales
    }
}
