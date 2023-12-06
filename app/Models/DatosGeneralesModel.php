<?php

namespace App\Models;

use CodeIgniter\Model;

class DatosGeneralesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'DatosGenerales'; // Cambiado a 'DatosGenerales'
    protected $primaryKey       = 'ID_DatosGenerales'; // Cambiado a 'ID_DatosGenerales'
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = [
        'nombre',
        'domicilio', // Nuevo campo
        'numeroEmergencia', // Nuevo campo
        'edad', // Nuevo campo
        'estatura', // Nuevo campo
        'peso', // Nuevo campo
        'estadoCivil', // Nuevo campo
        'escolaridad', // Nuevo campo
        'religion', // Nuevo campo
        'motivoConsulta', // Nuevo campo
   'Paciente_ID' ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nombre' => 'required',
        
        'numeroEmergencia' => 'required', // Nuevo campo
       
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
