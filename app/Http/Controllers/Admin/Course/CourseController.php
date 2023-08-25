<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }
    
    public function index() {

        $course = Course::get();

        return view('admin.course.index', compact('course'));
    }
}
