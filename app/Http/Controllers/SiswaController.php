<?php

namespace App\Http\Controllers;

use Session;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Str;
use PDF;

class SiswaController extends Controller
{

    public function index(Request $request)
    {
        if ($request->has('cari'))
            $data_siswa = \App\Siswa::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        else
            $data_siswa = \App\Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $siswa = \App\Siswa::create($request->all());
        return redirect('/siswa')->with('success', 'Data Berhasil disimpan');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->update($request->all());

        if ($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }

        return redirect('/siswa')->with('success', 'Data Berhasil di update');
    }

    public function destroy($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('success', 'Data Berhasil di hapus');
    }

    public function profil($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa.profil', ['siswa' => $siswa]);
    }

    public function excel()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }

    public function generatePDF(Request $request)
    {
        $data_siswa = \App\Siswa::all();
        $pdf = PDF::loadView('export.siswapdf', ['data_siswa' => $data_siswa]);
        return $pdf->download('data_siswa.pdf');
    }

    public function import_excel(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);

		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));

		// notifikasi dengan session
		Session::flash('sukses','Data Siswa Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect('/siswa');
	}

}
