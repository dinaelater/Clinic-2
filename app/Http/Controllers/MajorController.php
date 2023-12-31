<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;


class MajorController extends Controller
{
    function index()
    {
        $majors = Major::get();
        return view('major.index', compact('majors'));
    }
    function destroy($id)
    {
        $major = Major::find($id);
        $major->delete();
        return redirect('/majors');
    }
    function edit($id)
    {
        $major = Major::find($id);
        return view('Major.update', ['major' => $major]);
    }
    public function show(Major $major)
    {
        return view('major.show', compact('major'));
    }
    function update($id, Request $request)
    {
        //$major = Major::find($id);
        /// $major->update(['title' => $request->title]);
        Major::where('id', $id)->update(['title' => $request->title]);
        return redirect()->route('major.index');
    }
    function create()
    {
        return view('Major.create');
    }
    function store(Request $request)
    {
        Major::create(['title' => $request->title]);
        return redirect()->route('major.index');
    }
}
