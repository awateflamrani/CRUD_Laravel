<?php

namespace App\Http\Controllers;
use App\Models\Filiere;
use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin="admin";
        
$list_etds = DB::table('etudiant')
->leftjoin('filiere', 'etudiant.id_fil', '=', 'filiere.idfil')
->leftjoin('users', 'etudiant.user_id', '=', 'users.id')
->where('users.role', '!=', $admin)
->select('etudiant.*', 'users.email', 'filiere.nomfil as nomfil')
->get();
       
        //$list_etds=Etudiant::all();
       
        return view('etudiant.index',['list_etds'=>$list_etds]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_fils=Filiere::all();
        return view('etudiant.create',['list_fils'=>$list_fils]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new User();
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->role="user";
        $user->save();
        $etd= new Etudiant();
        $etd->etd_id=$request->input('etd_id');
        $etd->etd_nom=$request->input('etd_nom');
        $etd->etd_prenom=$request->input('etd_prenom');
        $etd->etd_sexe=$request->input('etd_sexe');
        $etd->id_fil=$request->input('etd_fil');
        $etd->user_id=$user->id;

        $etd->save();
        
        return Redirect("/etudiant");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list_fils=Filiere::all();
        $list_etds =DB::table('etudiant')
    ->join('users', 'etudiant.user_id', '=', 'users.id')
    ->select('etudiant.*', 'users.*')->where('etudiant.etd_id', '=', $id)
    ->get();
    //var_dump($list_etds);
    return view('etudiant.edit',['list_etds'=>$list_etds],['list_fils'=>$list_fils]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etd= Etudiant::find($id);
        $etd->etd_id=$request->input('etd_id');
        $etd->etd_nom=$request->input('etd_nom');
        $etd->etd_prenom=$request->input('etd_prenom');
        $etd->etd_sexe=$request->input('etd_sexe');
        $etd->id_fil=$request->input('etd_fil');
        

        $etd->save();
        $user= User::find($etd->user_id);
        $user->email=$request->input('email');
        
        
        $user->save();
        return Redirect("/etudiant");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etd=Etudiant::find($id);
        $user=User::find($etd->user_id);
       
        $etd->delete();
        $user->delete();
        return Redirect('/etudiant');
    }
}
