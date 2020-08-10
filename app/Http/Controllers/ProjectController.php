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
}
