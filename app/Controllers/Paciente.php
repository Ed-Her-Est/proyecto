<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Paciente extends BaseController
{
    public function index()
    {
        // ...
    }

    public function mostrar()
    {
        $pacienteModel = model('PacienteModel'); // Cambiado a PacienteModel
        $data['pacientes'] = $pacienteModel->findAll(); // Cambiado a 'pacientes'
        return
            view('common/head') .
            
            view('paciente/mostrar', $data) . // Cambiado a 'paciente'
            view('common/footer');
    }

    public function agregar()
    {
        return
            view('common/head') .
            
            view('paciente/agregar') . // Cambiado a 'paciente'
            view('common/footer');
    }

    public function insert()
    {
        $pacienteModel = model('PacienteModel'); // Cambiado a PacienteModel
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "genero" => $_POST['genero'],
        ];
        
        // Verificar si 'ine' está presente antes de intentar acceder a él
        if (isset($_POST['ine'])) {
            $data['ine'] = $_POST['ine'];
        }
        
        $pacienteModel->insert($data, false);
        return redirect('paciente/mostrar', 'refresh');
    }
    public function delete($ID_Paciente)
    {
        $pacienteModel = model('PacienteModel'); // Cambiado a PacienteModel
        $pacienteModel->delete($ID_Paciente); // Cambiado a 'id_paciente'
        return redirect('paciente/mostrar', 'refresh'); // Cambiado a 'paciente'
    }       

    public function editar($ID_Paciente)
    {
        $pacienteModel = model('PacienteModel'); // Cambiado a PacienteModel
        $data['paciente'] = $pacienteModel->find($ID_Paciente); // Cambiado a 'paciente'

        return
            view('common/head') .
            
            view('paciente/editar', $data) . // Cambiado a 'paciente'
            view('common/footer');
    }

    public function update()
    {
        $pacienteModel = model('PacienteModel');
        
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidoPaterno" => $_POST['apellidoPaterno'],
            "apellidoMaterno" => $_POST['apellidoMaterno'],
            "genero" => $_POST['genero'],
        ];
        
        // Verificar si 'ine' está presente antes de intentar acceder a él
        if (isset($_POST['ine'])) {
            $data['ine'] = $_POST['ine'];
        }
        
        
        $pacienteModel->update($_POST['id'], $data);
        return redirect('paciente/mostrar', 'refresh');
    }
    
    public function obtenerNombre($pacienteID) {
        // Aquí asumo que tienes una tabla llamada 'pacientes' en tu base de datos
        $query = $this->db->query("SELECT nombre FROM pacientes WHERE ID_Paciente = $pacienteID");
        
        // Obtén el resultado de la consulta
        $resultado = $query->getResultArray();
    
        // Devuelve el nombre del paciente
        return !empty($resultado) ? $resultado[0]['nombre'] : 'Nombre no encontrado';
    }

    public function buscar()
    {
        $pacienteModel = model('PacienteModel'); // Cambiado a PacienteModel
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $ine = $_GET['ine'];
            $data['pacientes'] = $pacienteModel
                ->like('nombre', $nombre)
                ->like('ine', $ine)
                
                ->findAll();
        } else {
            $nombre = "";
            $data['pacientes'] = $pacienteModel->findAll(); // Cambiado a 'pacientes'
        }

        return
            view('common/head') .
          
            view('paciente/buscar', $data) . // Cambiado a 'paciente'
            view('common/footer');
    }

    public function estadistica()
    {
        // Lógica para estadísticas de pacientes
    }

}

