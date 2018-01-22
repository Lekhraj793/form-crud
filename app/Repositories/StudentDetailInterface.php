<?php

namespace App\Repositories;

use App\studentdetail;
use Illuminate\Http\Request;

interface StudentDetailInterface
{
    public function add(Request $request);
    public function all();
    public function find(Request $request);
    public function update(Request $request);
    public function remove(Request $request);
    public function search(Request $request);
}

//not forget bind interface and repository in AppServiceProvider.
