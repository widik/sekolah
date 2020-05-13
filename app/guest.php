<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $table = "guest";
    protected $fillable = ['nama', 'kelas', 'keperluan', 'saran'];
}
