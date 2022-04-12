<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    function index(){
        $pasien = Pasien::all();
        return view ("pasien.index", compact ('pasien'));
    }

    function detail($id = null){
        $pasien = Pasien::find($id);
        return view ("pasien.detail", compact('pasien'));
    }
}
