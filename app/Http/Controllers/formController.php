<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    public function index()
    {
        //get users form Model
        $form = form::latest()->get();

        //passing user to view
        return view('form', compact('form'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required|max:50',
            'kelas' => 'required|max:10',
            'keterangan' => 'required|max:50',            
            'alasan' => 'required|max:255'
        ]);
        

        $data = New form;
        $data->nama_siswa = $request->nama_siswa;
        $data->kelas = $request->kelas;
        $data->keterangan = $request->keterangan;
        $data->alasan = $request->alasan;
        $data->jumlah_terlambat = 1;
        $data->save();
        return redirect()->route('afterinput');
    }
}
