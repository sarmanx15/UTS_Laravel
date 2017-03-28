<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobi extends Model
{
     protected $table = 'hobi';
    protected $fillable = ['hobi','anggota_id'];
}
