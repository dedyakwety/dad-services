<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Code_autorisation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Code_autorisations extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'expertise_1' => ['required'],
            'password' => ['required'],
        ]);
        
        if(password_verify($request->password, Auth::user()->password))
        {
            if($request->expertise_1)
            {
                $expertise_1 = $request->expertise_1;
            } else{
                $expertise_1 = null;
            }

            if($request->expertise_2)
            {
                $expertise_2 = $request->expertise_2;
            } else{
                $expertise_2 = null;
            }

            if($request->expertise_3)
            {
                $expertise_3 = $request->expertise_3;
            } else{
                $expertise_3 = null;
            }

            $code = Code_autorisation::All()->count();

            if(strlen((int)$code + 1) == 1)
            {
                $autorisation = "dad"."".rand(100000, 999999)."".(int)$code + 1;
            } else(strlen((int)$code + 1) == 2)
            {
                $autorisation = "dad"."".rand(10000, 99999)."".(int)$code + 1;
            } else(strlen((int)$code + 1) == 3)
            {
                $autorisation = "dad"."".rand(1000, 9999)."".(int)$code + 1;
            }
            
            Code_autorisation::create([
                'email' => $request->email,
                'expertise1' => $expertise_1,
                'expertise2' => $expertise_2,
                'expertise3' => $expertise_3,
                'code' => $autorisation,
            ]);

            Session::put('succes', "Code d'autorisation à été créer avec succes");
            return redirect()->route('Associers.index');

        } else{

            Session::put('erreur', 'Mot de passe incorect');
            return redirect()->route('Associers.index');

        }

    }
}
