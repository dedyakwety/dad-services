<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use App\Models\Role;
use App\Models\Expertise;
use App\Models\Code_autorisation;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = User::All()->count();

        return view('auth.register', [
            'users' => $users,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'postnom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'etat_civil' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'contact_1' => ['required', 'min:9', 'max:10'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->contact_2)
        {
            $contact_2 = $request->contact_2;

        } else{

            $contact_2 = null;
        }

        if(count(User::All()))
        {
            $request->validate([
                'code' => ['required'],
            ]);
            
            // Vérifier le code d'autorisation avant d'enregistrer
            $code = Code_autorisation::select('code')->where('email', $request->email)->first()->code;
            
            if($request->code == $code)
            {
                
                $autorisation = Code_autorisation::find(Code_autorisation::select('id')->where('code', $request->code)->first()->id);

                $user = User::create([
                    'role_id' => 2,
                    'expertise_id' => $autorisation->expertise1,
                    'expertise_1_id' => $autorisation->expertise2,
                    'expertise_2_id' => $autorisation->expertise3,
                    'name' => $request->nom,
                    'postnom' => $request->postnom,
                    'prenom' => $request->prenom,
                    'sexe' => $request->sexe,
                    'etat_civil' => $request->etat_civil,
                    'adresse' => $request->adresse,
                    'email' => $request->email,
                    'contact_1' => $request->contact_1,
                    'contact_2' => $contact_2,
                    'password' => Hash::make($request->password),
                ]);

            } else{

                Session::put('erreur', "Code d'autorisation incorect");
                return redirect()->route('register');
            }

        } elseif(!count(User::All())){
            
            $roles = ['admin', 'associer'];

            foreach($roles as $role)
            {
                Role::create([
                    'role' => $role,
                ]);
            }

            foreach(Parent::expertises() as $expertise)
            {
                Expertise::create([
                    'expertise' => $expertise,
                ]);
            }

            $user = User::create([
                'role_id' => 1,
                'expertise_id' => 1,
                'expertise_1_id' => 2,
                'expertise_2_id' => 4,
                'name' => $request->nom,
                'postnom' => $request->postnom,
                'prenom' => $request->prenom,
                'sexe' => $request->sexe,
                'etat_civil' => $request->etat_civil,
                'adresse' => $request->adresse,
                'email' => $request->email,
                'contact_1' => $request->contact_1,
                'contact_2' => $contact_2,
                'password' => Hash::make($request->password),
            ]);

        }

        event(new Registered($user));

        //Auth::login($user);

        return redirect()->route('login')->with('success', $user->prenom." ".$user->name." "."votre compte à été créer avec succès. Connectez vous");
    }
}
