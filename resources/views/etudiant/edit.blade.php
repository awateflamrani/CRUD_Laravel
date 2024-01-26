<center>
<form action="/etudiant/{{$list_etds->first()->etd_id}}" method="post">
        @csrf
        @method('PUT')
        
        <table>
            <tr>
                <td>ID</td>
                <td> <input type="text" name="etd_id" value="{{$list_etds->first()->etd_id}}" readonly> </td>
            </tr>
            <tr>
                <td>Nom</td>
                <td> <input type="text" name="etd_nom" value="{{$list_etds->first()->etd_nom}}"></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td> <input type="text" name="etd_prenom" value="{{$list_etds->first()->etd_prenom}}"></td>
            </tr>

            <tr>
                <td>SEXE</td>
                <td>
                    @if($list_etds->first()->etd_sexe =="F")
                    F<input type="radio" name="etd_sexe" value="F" checked>H<input type="radio" name="etd_sexe" value="H">
                    @else
                    F<input type="radio" name="etd_sexe" value="F" >H<input type="radio" name="etd_sexe" value="H" checked>
                    @endif
                </td>
            </tr>
            <tr>
            <td>Filére</td>
            <td>
            <select name="etd_fil" id="">
            @php    
            $nomfil="";$idfil="";
            @endphp
            @foreach ( $list_fils as $fil )
            @if($list_etds->first()->id_fil ==$fil->idfil)
            @php 
            $nomfil=$fil->nomfil;
            $idfil=$fil->idfil;
            @endphp
            @else
            <option value="{{$fil->idfil}}">{{$fil->nomfil}}</option>
            

            @endif
            @endforeach 
            <option value="{{$idfil}}" selected>{{$nomfil}}</option>
            </select>
            </td>
           
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td> Email</td>
                <td><input type="email" name="email" value="{{$list_etds->first()->email}}"></td>
                
            </tr>
            <tr>
            
            <tr>
                <td><input type="submit" name="add" value="envoyer"></td>
                <td><input type="reset" name="cancel" value="annuler"></td>
            </tr>
        </table>
        </center>