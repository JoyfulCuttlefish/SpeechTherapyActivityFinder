
@vite('resources/css/app.css')

    
    <table class="table-auto border-collapse border border-slate-400">
        <tr>
          <th class="border-collapse border border-slate-400">Name</th>
          <th class="border-collapse border border-slate-400">Email</th>
        </tr>
        @foreach($users as $user)
        <tr>
            
          <td class="border-collapse border border-slate-400">{{$user['name']}}</td>
          <td class="border-collapse border border-slate-400">{{$user['email']}}</td>
         
        </tr>
        @endforeach
      </table>
      
