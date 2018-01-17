<?php

namespace App\Http\Controllers;

use App\Libraries\FileStorage;
use App\student;
use App\studentdetail;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('/form/insert');
    }

    public function store(Request $request)
    {
        //dd(request()->all());
        $students= studentdetail::create(request()->all());
        FileStorage::uploadImage($students, $request);
        return redirect('/');
    }

    public function show()
    {
        $students=studentdetail::orderBy('fname','asc')->get();//replace get() with all()
        return view('/users',compact('students'));
    }

    public function edit($id)
    {
        $student=studentdetail::find($id);
        return view('/form/edit',compact('student'));
    }

    public function update(Request $request)
    {
        //dd(request()->all());
        $student=studentdetail::findorfail($request->id);
        $input=$request->all();
        FileStorage::uploadImage($student, $request);
        $student->fill($input)->save();

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        studentdetail::destroy($request->id);
        return redirect('/');
    }

    public function auto()
    {
        return view('/search.auto');
    }

    public function autocomplete(Request $request)
    {
        $input=$_POST['auto'];
        $auto=studentdetail::where('mobile',"LIKE",$input)->get();
        return response()->json($auto);
    }

    public function search(Request $request)
    {
        $search=$_POST['search'];
        $student=studentdetail::where('email',"=",$search)->first();
        if (count($student)>0)
        {
            return view('/form/edit', compact('student'));
        }
        else
        {
            throw new \Exception('content not found');
        }
    }

}
