<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request): View
    {
        $pt = $request->query('pt') ?? '';

        return view('index', ['pt' => $pt]);
    }

    public function show(Request $request): View
    {
        $pt = $request->query('pt') ?? '';

        return view('show', ['pt' => $pt]);
    }
}
