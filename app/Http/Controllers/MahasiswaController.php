<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = ['nama' => "herlita", 'foto' => 'me.jpg'];
        $mahasiswa = DB::table('mahasiswaa')->get();
        return view('mahasiswa', compact(['data', 'mahasiswa']));
    }
    public function show($id)
    {

    }
}
