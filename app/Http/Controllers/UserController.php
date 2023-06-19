<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      return view('users.index');
    }
    public function storedata(Request $request){
      $data = $request->validate([
        'user' => 'required',
        'password' => 'required',
      ]);

      User::create($data);
      return redirect()->route('customers.index')->with('success', 'you are logged in!!!!!!!!!');
    }
}
