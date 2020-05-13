<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::all();
    }

    public function map($siswa): array
    {
        return [
            //$siswa->get_nama_lengkap(),
            $siswa->nama_depan,
            $siswa->nama_belakang,
            $siswa->jenis_kelamin,
            $siswa->agama,
            $siswa->alamat,
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA DEPAM',
            'NAMA BELAKANG',
            'JENIS KELAMIN',
            'AGAMA',
            'ALAMAT',
        ];
    }
}
