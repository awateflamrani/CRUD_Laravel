<center>
    <h1> Ajouter filiere </h1>
    <form action="/filiere/{{$fil->idfil}}" method="post">
        @csrf
        @method('PUT')
        
     <table>
        <tr>
            <td>
                nom
            </td>
            <td>
                <input type="text" name="nomfil" value="{{$fil->nomfil}}">
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="add">
            <input type="reset" name="annuler">
            </td>
          
        </tr>
     </table>
    </form>
</center>