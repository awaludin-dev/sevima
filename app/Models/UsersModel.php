<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'email', 'name', 'photo', 'tempat_lahir', 'tanggal_lahir'];
}
