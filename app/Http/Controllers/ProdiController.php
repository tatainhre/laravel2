<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => "herlita", 'foto' =>'herlita.jpg'];
        $prodi = Prodi::all();
        return view('prodi.index', compact(['data', 'prodi']));
    }

    public function create()
    {
        $data = ['nama' => "herlita", 'foto' =>'herlita.jpg'];
        return view('prodi.create', compact(['data']));
    }

    public function store(Request $request)
    {
        $validdateData = $request->validate(
            [
                'nama_prodi'=> 'required|unique:prodi|max:255'
            ],
        );
        Prodi::create($validdateData);
        return redirect('/prodi');
    }
}