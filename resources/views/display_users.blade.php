Display Users..

      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Pass Hash</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->ID }}</td>
            <td>{{ $user->Username }}</td>
            <td>{{ $user->Email }}</td>
            <td>{{ $user->Password }}</td>
                <td><a href="/deleteuser/{{$user->Username}}">X</a></td>
         </tr>
         @endforeach
      </table>

      <a href="/register">Back to Registration</a>