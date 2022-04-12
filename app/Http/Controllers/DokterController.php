<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
        function index(){
            $dokter = Dokter::all();
            return view ("dokter.index", compact ('dokter'));
        }

        function detail($id = null){
            $dokter = Dokter::find($id);
            return view ("dokter.detail", compact('dokter'));
        }
}
