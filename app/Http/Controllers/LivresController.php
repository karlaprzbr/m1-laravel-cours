<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivresController extends Controller
{
    public function liste()
    {
        $livres = Livre::all();
        return view("livres.liste", ["livres"=>$livres]);
    }
}
