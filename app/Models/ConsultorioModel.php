<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultorioModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Consultorio'; // Cambiado a 'Consultorio'
    protected $primaryKey       = 'ID_Consultorio'; // Cambiado a 'ID_Consultorio'
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['estatus', 'numeroConsultorio'];

    // Dates
    protected $useTimestamps = true; // Cambiado a true
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'estatus' => 'required', // Cambiado a 'estatus'
        // Ajusta las reglas de validación según tu nueva entidad 'Consultorio'
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
