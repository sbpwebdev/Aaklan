<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list()
    {
        return view('admin/Student/list');
    }
    public function add()
    {
        return view('admin/Student/add');
    }

}
