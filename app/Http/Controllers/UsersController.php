<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
 public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Muestra el usuario a cambiar
   *
   * @return Response
   */
  public function change(Request $request)
  {
      return view('users.change', compact('user'));
  }

  /**
   * Cambia contraseña del usuario actual.
   *
   * @return Response
   */
  public function update(Request $request)
  {

      $user = User::where('name', '=' ,$request->get('name'))->first();
      //var_dump($user);
      //return;


      $user->password = bcrypt($request->get('password'));
      $user->save();
      

      //Auth::user()->password = Hash::make($request->get('password'));
      //Auth::user()->save();
      return back();
  }


}
