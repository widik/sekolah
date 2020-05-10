<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = "siswa";
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'user_id'];

    public function get_avatar()
    {
        if (!$this->avatar)
            return asset('images/default.png');
        return asset('images/'.$this->avatar);
    }

    public function get_nama_lengkap()
    {
        return $this->nama_depan. ' '.$this->nama_belakang;
    }
}
