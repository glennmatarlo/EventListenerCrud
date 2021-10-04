<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function show($user)
    {
        return User::find($user);
    }

    public function update(Request $request, $user)
    {
      $user = User::find($user);
      $user->update($request->all());

      return $user;
    }

    public function destroy($user)
    {
        return User::destroy($user);
    }

    public function byUser(User $user){
        return User::with('logs', 'item')->where('id', $user->id)->get();
    }
}
