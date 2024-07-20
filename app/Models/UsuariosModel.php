<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table         = 'usuarios';
    protected $primarykey = 'id_usuario';

    protected $useAutoIncrement = true;
    protected $useSoftDeletes = false;
    
    protected $allowedFields = [
        'nombre_usuario', 'apellido_usuario', 'email_usuario', 'password_usuario', 'estado_usuario', 'perfil_id',
    ];
    
    protected $returnType = 'array';
}