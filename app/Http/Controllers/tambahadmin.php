<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class tambahadmin extends Controller
{
    public function tambahAdmin(Request $request)
    {
        $data = New User();
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect()->route('/tambah');
    }
}
