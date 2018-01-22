<?php

namespace App\Http\Controllers;

use App\Repositories\StudentDetailInterface;
use App\Repositories\StudentDetailRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;

    public function __construct(StudentDetailRepository $student)
    {
        $this->studentdetail=$student;
    }

    public function index()
    {

        return view('/form/insert');
    }

    public function store(Request $request)
    {
        $student=$this->studentdetail->add($request);
        if (!$student) {
            return redirect('/');
        }
        else {
            throw new Exception("data not inserted");
        }
    }

    public function show()
    {
        $students=$this->studentdetail->all();
        return view('/users',compact('students'));
    }

    public function edit(Request $request)
    {
        $student=$this->studentdetail->find($request);
        return view('/form/edit',compact('student'));
    }

    public function update(Request $request)
    {
        $student=$this->studentdetail->update($request);
        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $student=$this->studentdetail->remove($request);
        if($student)
        {
            return redirect('/');
        }
        else
        {
            throw new \Exception("data not remove");

        }
    }

    public function search(Request $request)
    {
        $student=$this->studentdetail->search($request);
        if (count($student)>0)
        {
            throw new \Exception('content not found');
        }
        else
        {
          return view('/form/edit', compact('student'));

        }
    }

}
