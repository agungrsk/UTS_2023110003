<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
        $dokter = Dokter::all();
        return view ("dokter.index", compact ('dokter'));
}
