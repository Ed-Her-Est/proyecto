<?php

namespace App\Models;

use CodeIgniter\Model;

class SignosVitalesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'SignosVitales'; // Cambiado a 'SignosVitales'
    protected $primaryKey       = 'ID_SignosVitales'; // Cambiado a 'ID_SignosVitales'
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = [
        'presionArterial', // Nuevo campo
        'frecuenciaCardiaca', // Nuevo campo
        'tensionArterial', // Nuevo campo
        'saturacionOxigeno', // Nuevo campo
        'temperatura', // Nuevo campo
        'Paciente_ID'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'Paciente_ID'=> 'required',
        'presionArterial' => 'required', // Nuevo campo
        'frecuenciaCardiaca' => 'required', // Nuevo campo
        'tensionArterial' => 'required', // Nuevo campo
        'saturacionOxigeno' => 'required', // Nuevo campo
        'temperatura' => 'required', // Nuevo campo
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
