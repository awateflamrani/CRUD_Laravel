<script src="https://cdn.tailwindcss.com"></script>

<center>
    <h1>
        Filieres:
    </h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
        
    <table border="1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
        <th scope="col" class="px-6 py-3">
                 id
            </th>
            <th scope="col" class="px-6 py-3">
                nom
            </th>
            <td colspan="2">
                <a href="filiere/create" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ajouter</a>
            </td>
        </tr>
        </thead>
        <tbody>
   @foreach ( $list_fils as $fil )
   <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
   <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$fil->idfil}}
            </th>
            <td class="px-6 py-4">
            {{$fil->nomfil}}
            </td>
           
            <td class="px-6 py-4">
                <a href="../filiere/{{$fil->idfil}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">modifier</a>
            </td>
          
            
            
                <form action="../filiere/{{$fil->idfil}}" method="post">
                <td class="px-6 py-4">
                    @csrf
                    @method('DELETE')
                   <input type="submit" value="delete" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                   </td>
                </form>
           
        </tr>
   @endforeach     
   </tbody>
    </table>
    </div>
    <br>
    <div>
        <a href="home" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Retour</a>

        <a href="etudiant" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Gestion Etudiants</a>
    </div>
</center>