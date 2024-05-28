<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => "herlita", 'foto' =>'me.jpg'];
        $prodi = DB::table('prodii')->get();
        return view('prodi', compact(['data', 'prodi']));
    }
}