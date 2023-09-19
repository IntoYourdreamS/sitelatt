<?php

namespace App\Http\Controllers;

use App\Models\form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class DashboardFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $perPage = $request->input('perPage', 25);

            $data = form::orderBy('id','desc')->paginate($perPage);
        // $data = form::all();
        
        return view('dashboardd', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $data = Form::findOrFail($id);
        $data->delete();
        return redirect()->route('dash');
    }
    public function admin()
    {
        $data = User::all();
        return view('admin', compact('data'));
    }
    public function hapusAdmin($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('admin');
    }
}
