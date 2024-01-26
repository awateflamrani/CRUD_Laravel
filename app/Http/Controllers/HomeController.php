<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        
        // Retrieve the related etudiant data
        $etudiant = $user->etudiant;
        $etudiant = DB::table('users')
            ->join('etudiant', 'users.id', '=', 'etudiant.user_id')
            ->join('filiere', 'etudiant.id_fil', '=', 'filiere.idfil')
            ->where('users.id', '=', $user->id)
            ->select('etudiant.etd_id', 'users.email', 'etudiant.etd_nom' ,'etudiant.etd_prenom','etudiant.etd_sexe' ,'filiere.nomfil')
            ->first();
        // Pass the user and etudiant data to the view
        return view('home',['etudiant' => $etudiant]);
        //return view('home');
    }
}
