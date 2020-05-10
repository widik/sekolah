<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = "buku";
    protected $fillable = ['kd_buku', 'no_isbn', 'nama', 'kategori', 'deskripsi', 'lokasi', 'jumlah', 'dipinjam'];
}
