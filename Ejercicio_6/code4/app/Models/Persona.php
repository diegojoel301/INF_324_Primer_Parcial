<?php 
namespace App\Models;

use CodeIgniter\Model;

class Persona extends Model{
    protected $table      = 'PERSONA';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'ci';
    protected $allowedFields = ['nombre_completo', 'fecha_nacimiento', 'telefono', 'departamento'];
}