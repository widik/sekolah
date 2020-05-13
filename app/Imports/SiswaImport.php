<?php

namespace App\Imports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            'nis' => $row[1],
            'nama_depan' => $row[2],
            'nama_belakang' => $row[3],
            'jenis_kelamin' => $row[4],
            'agama' => $row[5],
            'alamat' => $row[6],
        ]);
    }
}
