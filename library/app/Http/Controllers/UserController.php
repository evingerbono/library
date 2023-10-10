<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $User = response()->json(User::all());
        return $User;
    }
    public function show($id)
    {
        $User = response()->json(User::find($id));
        return $User;
    }
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/User/list');
    }

    public function store(Request $request)
    {
        $User = new User();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        $User->permisson = $request->permisson;
        $User->save();
    }
    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        $User->permisson = $request->permisson;
        $User->save();
    }
}
