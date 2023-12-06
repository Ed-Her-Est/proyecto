<?php

namespace App\Models;

use CodeIgniter\Model;

class ControlModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Control';
    protected $primaryKey       = 'ID_Control';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['fechaConsulta', 'telefono', 'Paciente_ID', 'Consultorio_ID'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'fechaConsulta' => 'required|valid_date',
        'telefono' => 'required|max_length[20]',
        'Paciente_ID' => 'required|integer',
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
