
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $etudiant->etd_nom." ".$etudiant->etd_prenom }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            




                        </div>
                    @endif
                    @if(Auth::user()->role == 'user')
                    <ul>
                            <li>ID: {{ $etudiant->etd_id }}</li>
                            <li>Email: {{ $etudiant->email }}</li>
                            <li>sexe: {{ $etudiant->etd_sexe }}</li>
                            <li>filere: {{ $etudiant->nomfil }}</li>
                            <!-- Add other properties here -->
                        </ul>
                        @elseif(Auth::user()->role == 'admin')
                        <button type="button" onclick="location.href='filiere';" class="btn btn-dark btn-info btn-lg">Gestion Filieres</button>

                        <button type="button" onclick="location.href='etudiant';" class="btn btn-dark btn-info btn-lg">Gestion Etudiants</button>
                                      



                        
                    @endif

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
