<center>
    <h1> Ajouter filiere </h1>
    <form action="/filiere" method="post">
        @csrf
     <table>
        <tr>
            <td>
                nom
            </td>
            <td>
                <input type="text" name="nomfil">
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="add">
            <input type="reset" name="add">
            </td>
          
        </tr>
     </table>
    </form>
</center>