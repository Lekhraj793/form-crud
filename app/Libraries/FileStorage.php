<?php

namespace App\Libraries;

use App\studentdetail;
use Illuminate\Http\Request;

class FileStorage
{
    public static function uploadImage(studentdetail $student, Request $request)
    {
        $filename=$student->id.".".$request->file('image')->extension();
        $request->file('image')->storeAs('images', $filename, 'public' );
    }
}
