<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(Request $request){
        // echo "<strong>Request:</strong> ".$request."<hr>";
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $pass_hash = password_hash($password, PASSWORD_DEFAULT);

        echo "Username: ".$username."<br>Email: ".$email."<br>Pass_hash: ".$pass_hash;

        echo "<br>";
        DB::insert('INSERT INTO LaravelUser (ID, Username, Email, Password) 
                    values(?,?,?,?)',[2, "$username", "$email", "$pass_hash"]);
        echo "Record inserted successfully.<br/>";

        // echo "<br>Token: ".$request->input('_token');
        echo "<br><a href='/register'>Go back</a>";


    }
}
