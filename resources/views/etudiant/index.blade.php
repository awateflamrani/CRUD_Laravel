<script src="https://cdn.tailwindcss.com"></script>

<center>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <h1>
        Etudiants:
    </h1>
    <table border="1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
       
        <th scope="col" class="px-6 py-3">
        id
                </th>
                <th scope="col" class="px-6 py-3">
        nom
                </th>
                <th scope="col" class="px-6 py-3">
        prenom
                </th>
                <th scope="col" class="px-6 py-3">
        sexe
                </th>
                <th scope="col" class="px-6 py-3">
        filiere
                </th>
                <th scope="col" class="px-6 py-3">
        email
                </th>
           
            <td colspan="2">
                <a href="../etudiant/create" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ajouter</a>
            </td>
        </tr>
        <tbody>
   @foreach ( $list_etds as $etd )
   <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    @if($etd->id_fil==0)
    @php
    $fil="!!";
    @endphp
    @else
    @php
    $fil=$etd->nomfil;
    @endphp
    @endif
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$etd->etd_id}}
            </th>
            <td class="px-6 py-4">
            {{$etd->etd_nom}}
            </td >
            
            <td class="px-6 py-4">
            {{$etd->etd_prenom}}
            </td>
            <td class="px-6 py-4">
            {{$etd->etd_sexe}}
            </td>
            <td class="px-6 py-4">
            {{$fil}}
            </td>
            <td class="px-6 py-4">
            {{$etd->email}}
            </td>
           
           
            <td class="px-6 py-4" >
                <a href="../etudiant/{{$etd->etd_id}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">modifier</a>
            </td>
           
            
                <form action="../etudiant/{{$etd->etd_id}}" method="post">
                <td class="px-6 py-4">
                    @csrf
                    @method('DELETE')
                   <input type="submit" value="delete" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                   </td class="px-6 py-4">
                </form>
            
        </tr>
        </tbody>
   @endforeach     
    </table>
</div>
<br>
<div>
        <a href="home" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Retour</a>

        <a href="filiere" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Gestion Filiere</a>
    </div>
</center>