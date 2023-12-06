<?php

namespace App\Models;

use CodeIgniter\Model;

class FisioterapeutaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Fisioterapeuta';
    protected $primaryKey       = 'ID_Fisioterapeuta';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['nombre', 'apellioPaterno', 'apellidoMaterno', 'usuario','contrasenia', 'genero', 'telefono'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [   
        'nombre' => 'required',
        'usuario' => 'required', 
        'telefono' => 'required', ];
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
