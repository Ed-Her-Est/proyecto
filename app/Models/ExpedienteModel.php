<?php

namespace App\Models;

use CodeIgniter\Model;

class ExpedienteModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Expediente';
    protected $primaryKey       = 'ID_Expediente';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = [
        'fechaIngreso', // Campo para la fecha de ingreso (fecha)
        'Paciente_ID',  // Referencia al paciente (entero)
        'Consultorio_ID',// Referencia al consultorio (entero)
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'date'; // Cambiado a 'date' para campos de fecha
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    // Validation
    protected $validationRules      = [
        'fechaIngreso'  => 'required|valid_date',
        'Paciente_ID'   => 'required|integer',
        'Consultorio_ID' => 'required|integer',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
