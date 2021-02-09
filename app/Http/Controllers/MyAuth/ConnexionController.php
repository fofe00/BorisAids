<?php

namespace App\Http\Controllers\MyAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Utilisateurs;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('connexion');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $resultat=auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if ($resultat) {
            return redirect(route('home'));
        }else{
            return back()->withInput()->withErrors([
                'email' => 'Vos identifiants sont incorrects.',
            ]);
        }

    }
    public function deconnexion()
    {
        auth()->logout();
        return redirect(route('login'));
    }

    public function test()
    {
        $user = Utilisateurs::where('pseudo', 'ainix')->first();
       // dd($user->id);
        $user->assignRole('admin');
        $user->assignRole('contributor');
    }
}
