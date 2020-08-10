<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index() {
        $data = DB::table('project')->get();

        return view('index', compact('data'));
    }

    public function create() {
        return view('formProject');
    }

    public function store() {
        
        return redirect('/proyek')->with('sukses', 'proyek berhasil dtambahkan!');
    }

    public function show() {
        
        return view();
    }

    public function edit() {
        
        return view();
    }

    public function update() {
        
        return redirect('/proyek')->with('sukses', 'proyek berhasil diubah!');
    }

    public function destroy() {
        
        return redirect('/proyek')->with('sukses', 'proyek berhasil dihapus!');
    }
}
