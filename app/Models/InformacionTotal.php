<?php

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $table = 'Paciente';
    protected $primaryKey = 'ID_Paciente';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'ine', 'genero'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules      = [
        'nombre' => 'required',
        'apellidoPaterno' => 'required',
        'apellidoMaterno' => 'required',
        'ine' => 'required|exact_length[8]',
        'genero' => 'required|in_list[Masculino,Femenino]',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}

class FisioterapeutaModel extends Model
{
    protected $table = 'Fisioterapeuta';
    protected $primaryKey = 'ID_Fisioterapeuta';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'usuario', 'contrasenia', 'genero', 'telefono'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules      = [
        'nombre' => 'required',
        'apellidoPaterno' => 'required',
        'apellidoMaterno' => 'required',
        'usuario' => 'required',
        'contrasenia' => 'required',
        'genero' => 'required|in_list[Masculino,Femenino]',
        'telefono' => 'required',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}

class ControlModel extends Model
{
    protected $table = 'Control';
    protected $primaryKey = 'ID_Control';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['fechaConsulta', 'telefono', 'Paciente_ID', 'Consultorio_ID'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules      = [
        'fechaConsulta' => 'required|valid_date',
        'telefono' => 'required',
        'Paciente_ID' => 'required',
        'Consultorio_ID' => 'required',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
}
