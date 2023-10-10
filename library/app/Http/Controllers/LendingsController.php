<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LendingsControllersController extends Controller
{
    //
    public function index()
    {
        $LendingsController = response()->json(LendingsControllersController::all());
        return $LendingsController;
    }
    public function show($id)
    {
        $LendingsController = response()->json(LendingsControllersController::find($id));
        return $LendingsController;
    }
    public function destroy($id)
    {
        LendingsController::find($id)->delete();
        return redirect('/LendingsController/list');
    }

    public function store(Request $request)
    {
        $LendingsController = new LendingsController();
        $LendingsController->name = $request->name;
        $LendingsController->email = $request->email;
        $LendingsController->password = Hash::make($request->password);
        $LendingsController->permisson = $request->permisson;
        $LendingsController->save();
    }
    public function update(Request $request, $id)
    {
        $LendingsController = LendingsController::find($id);
        $LendingsController->name = $request->name;
        $LendingsController->email = $request->email;
        $LendingsController->password = Hash::make($request->password);
        $LendingsController->permisson = $request->permisson;
        $LendingsController->save();
    }
}
