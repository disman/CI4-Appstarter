<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa_model extends Model {

   protected $table      = 'mahasiswa';
   protected $primaryKey = 'nim';

   protected $allowedFields = ['nama', 'alamat', 'jenkel'];

}