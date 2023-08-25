<?php

namespace App\Http\Controllers\User\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        return view('user.course.courses');
    }

    public function details() {

        
        return view('user.course.lesson_details');
    }
}
