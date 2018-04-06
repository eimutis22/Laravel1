Display Users..

      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Pass Hash</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->ID }}</td>
            <td>{{ $user->Username }}</td>
            <td>{{ $user->Email }}</td>
            <td>{{ $user->Password }}</td>
         </tr>
         @endforeach
      </table>