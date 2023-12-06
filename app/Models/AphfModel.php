<?php

namespace App\Models;

use CodeIgniter\Model;

class AphfModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'APHF'; // Cambiado a 'Aphf'
    protected $primaryKey       = 'ID_APHF'; // Cambiado a 'ID_Aphf'
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = [
        'diabetes', // Nuevo campo booleano
        'HTA', // Nuevo campo booleano
        'cardioPatia', // Nuevo campo booleano
        'enfReumaticas', // Nuevo campo booleano
        'Paciente_ID' // Referencia al paciente
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'Paciente_ID' => 'required', // Ajustado para que Paciente_ID sea obligatorio
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
