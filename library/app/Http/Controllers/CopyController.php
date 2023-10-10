<?php

use Illuminate\Http\Request;

class Copy extends Controller
{
    //
    public function index()
    {
        $Copy = response()->json(Copy::all());
        return $Copy;
    }

    public function store(Request $request)
    {
        $Copy = new Copy();
        $Copy->hardcover = $request->hardcover;
        $Copy->status = $request->status;
        $Copy->publications = $request->publications;
        $Copy->save();
    }
    public function update(Request $request, $id)
    {
        $Copy = Copy::find($id);
        $Copy->hardcover = $request->hardcover;
        $Copy->status = $request->status;
        $Copy->publications = $request->publications;
        $Copy->save();
    }
}
