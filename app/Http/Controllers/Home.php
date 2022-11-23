<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expertise;

class Home extends Controller
{
    public function index()
    {
        $numero = 1;
        $expertises = Expertise::All();
        return view('pages.home', [
            'numero' => $numero,
            'expertises' => $expertises,
        ]);
    }
}
