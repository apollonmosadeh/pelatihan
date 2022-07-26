<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;


class mahasiswa extends Controller
{
    public function index(){

        $mahasiswa= student :: orderBy('id', 'ASC')->paginate(5);
        // var_dump($mahasiswa); // printr()
        return view('mahasiswa1',compact('mahasiswa'));
    }
    public function show(){
        return(view('create_mahasiswa'));
        echo "<br>";
        echo "hello there";
    }
    public function create(){
        return(view('create_mahasiswa'));

    }
    public function edit($id){
        // ambil data berdasarkan id
        $mahasiswa = student::findOrFail($id);

        // tampilkan view form halaman edit data
        return view('edit_mahasiswa', compact('mahasiswa'));
    }
    public function update(Request $request, $id){
        // validasi
        $this->validate($request,[
            'nim' => 'required|min:3|max:10',
            'nama' => 'required',
            'matkul' => 'required'
        ]);
        // ambil data -> $id
        $mahasiswa = student::findOrFail($id);

        // update data
        $mahasiswa -> update([
            'nim' => $request->nim,
            'nama' => $request -> nama,
            'matkul' => $request -> matkul
        ]);
        // redirect ke halaman daftar mahasiswa
        return redirect()->route('mahasiswa.index') -> with('sukses', 'data berhasil diupdate');
    }
    public function destroy($id){
        // ambil data berdasarkan id
        $mahasiswa = student::findOrfail($id);
        // PROSES DELETE
        $mahasiswa -> delete();
        // redirect  ke halaman daftar mahasiswa
        return redirect()->route('mahasiswa.index')-> with('sukses','data berhasil');
    }
    public function store(Request $request){
        $this->validate($request,[
            'nim' => 'required|min:3|max:10',
            'nama' => 'required',
            'matkul' => 'required'
            // 'matkul' => 'required'
            // 'email' => 'required|valid_email|unique:mahasiswa,email'
        ]);
        // echo $request->nim;
        // echo "<br>";
        // echo $request->nama;
        // opsi penulisan 
        // echo $request -> get('nim');
        // echo "<br>";
        // echo $request -> get('nama');
        // echo "<br>";
        // echo $request -> get('matkul');
        $student = student::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'matkul' => $request -> matkul
        ]);
        return redirect()->route('mahasiswa.index')
        ->with('sukses', 'data berhasil');
       
    }
    private function getData(){
        return [
            [
            'id'         => 1,
            'nim'        => "2030511059",
            'nama'       => "Rafi Abdul Mugni",
            'keterangan' => "makan",
            'matkul'     => "basis data"
        ],
        [
            'id'         => 2,
            'nim'        => "2030511064",
            'nama'       => "Pantri Pramukti",
            'keterangan' => "tidur mulu",
            'matkul'     => 'jaringan komputer'
            ]
        ];
    }
}
