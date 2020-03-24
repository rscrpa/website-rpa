<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function store(Request $request) {
        
        if ($_POST['repeat-pass']==$_POST['password'] ) {
            $user = User::create(request(['email', 'name', 'password']));
            
            auth()->login($user);
            return redirect()->to('/');
        }
        else{
            echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
        }
    }
}