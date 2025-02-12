<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function list()
    {
        return view('admin/Courses/list');
    }
    public function add()
    {
        return view('admin/Courses/add');
    }
}
