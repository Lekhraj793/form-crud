<?php

namespace App\Repositories;

use App\Repositories\StudentDetailInterface;
use App\Libraries\FileStorage;
use App\studentdetail;
use Illuminate\Http\Request;


class StudentDetailRepository implements StudentDetailInterface
{
    public function add(Request $request)
    {
        $student=new studentdetail();
        //$student=studentdetail::create(request()->all());
        $student->fname=request('fname');
        $student->lname=request('lname');
        $student->email=request('email');
        $student->mobile=request('mobile');
        $student->dob=request('dob');
        $student->address=request('address');
        $student->city=request('city');
        $student->state=request('state');
        $student->pin=request('pin');
        $student->image=request('image');
        FileStorage::uploadImage($student, $request);
        $student->save();

    }

    public function all()
    {
        return $students = studentdetail::orderBy('fname','asc')->get();
    }

    public function find(Request $request)
    {
        return studentdetail::find($request->id);
    }

    public function update(Request $request)
    {
        $student=studentdetail::find(request('id'));
        $student->fname=request('fname');
        $student->lname=request('lname');
        $student->email=request('email');
        $student->mobile=request('mobile');
        $student->dob=request('dob');
        $student->address=request('address');
        $student->city=request('city');
        $student->state=request('state');
        $student->pin=request('pin');
        FileStorage::uploadImage($student, $request);
        $student->save();
    }

    public function remove(Request $request)
    {
        return studentdetail::destroy(request('id'));
    }

    public function search(Request $request)
    {
        $search=$_POST['search'];
        $student=studentdetail::where('email',"=",$search)->first();
    }
}
