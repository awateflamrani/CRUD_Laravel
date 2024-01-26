<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_fils=Filiere::all();
        return view('filiere.index',['list_fils'=>$list_fils]);
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filiere.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $f= new Filiere();
        $f->nomfil=$request->nomfil;
        $f->save();
        return Redirect("/filiere");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('filiere.show',['fil'=>Filiere::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit( $filiere)
    {
        $f= Filiere::find($filiere);
        return view('filiere.edit',['fil'=>$f]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $f= Filiere::find($id);
        $f->nomfil=$request->nomfil;
        $f->save();
        return Redirect("/filiere");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('etudiant')
        ->where('id_fil', $id)
        ->update(['id_fil' => 0]);

        $f=Filiere::find($id);
        $f->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        return Redirect('/filiere');
    }
}
