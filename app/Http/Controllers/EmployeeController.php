<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create() {
        return view('');
    }

    public function store() {
        
        return redirect('/proyek')->with('sukses', 'Staff berhasil ditambahkan!');
    }
}
