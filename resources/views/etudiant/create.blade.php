<center>
    <h1></h1>
    <form action="/etudiant" method="post">
        @csrf
        <table>
            <tr>
                <td>ID</td>
                <td> <input type="text" name="etd_id" value=""> </td>
            </tr>
            <tr>
                <td>Nom</td>
                <td> <input type="text" name="etd_nom" value=""></td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td> <input type="text" name="etd_prenom" value=""></td>
            </tr>
            <tr>
                <td>SEXE</td>
                <td>
                    F<input type="radio" name="etd_sexe" value="F" >H<input type="radio" name="etd_sexe" value="H">
                </td>
            </tr>
            <tr>
            <td>Filére</td>
            <td>
            <select name="etd_fil" id="">
            @foreach ( $list_fils as $fil )
            <option value="{{$fil->idfil}}">{{$fil->nomfil}}</option>
            @endforeach 
            </select>
            </td>
            </tr>
            <tr>
            <td colspan="3">
                <input type="checkbox" >make an account automaticly
            </td>
            </tr>
            
            <tr>
                <td></td>
            </tr>
            <tr>
                <td> Email</td>
                <td><input type="email" name="email" value=""></td>
                
            </tr>
            <tr>
            <td> Password</td>
                <td><input type="rese" name="password" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="add" value="envoyer"></td>
                <td><input type="reset" name="cancel" value="annuler"></td>
            </tr>
