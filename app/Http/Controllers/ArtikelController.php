<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;
class ArtikelController extends Controller
{
    public function index()
    {
    	return view('artikel.index');
    }

    public function simpan(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $slug = strtolower($data['judul']);
        $slug = str_replace(" ", "-", $slug);
        $data += ['slug'=>$slug, 'user_id'=>1];
        $check = ArtikelModel::save($data);
        if ($cek) {
            return redirect('/artikel');
        }
    }

    public function tambah()
    {
    	return view('artikel.create');
    }

    public function edit()
    {
    	return view('artikel.edit');
    }

    public function show()
    {
    	return view('artikel.detail');
    }
}
