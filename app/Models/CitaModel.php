<?php

namespace App\Models;

use CodeIgniter\Model;

class CitaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Cita';
    protected $primaryKey       = 'ID_Cita';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['fecha', 'numConsultorio', 'fisioterapeuta_ID', 'Paciente_ID', 'Consultorio_ID'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'fecha' => 'required',
        'numConsultorio' => 'required',
        'fisioterapeuta_ID' => 'required',
        'Paciente_ID' => 'required',
        'Consultorio_ID' => 'required',
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
