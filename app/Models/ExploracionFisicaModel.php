<?php

namespace App\Models;

use CodeIgniter\Model;

class ExploracionFisicaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ExploracionFisica';
    protected $primaryKey       = 'ID_ExploracionFisica';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = [
        'escalaDolor', // Campo para la escala de dolor (entero)
        'ROM', // Campo para el rango de movimiento (cadena)
        'fuerza', // Campo para la fuerza muscular (cadena)
        'tonoMuscular', // Campo para el tono muscular (cadena)
        'dermatomas', // Campo para los dermatomas (cadena)
        'reflejos', // Campo para los reflejos (cadena)
        'Paciente_ID', // Referencia al paciente (entero)
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'escalaDolor'  => 'required|integer',
        'ROM'           => 'required',
        'fuerza'        => 'required',
        'tonoMuscular'  => 'required',
        'dermatomas'    => 'required',
        'reflejos'      => 'required',
        'Paciente_ID'   => 'required|integer',
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
