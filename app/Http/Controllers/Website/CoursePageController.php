<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursePageController extends Controller
{
    public function index() {

        $page_title = "Course Chaxthekingmaker";
        
        return view('website.pages.course', compact('page_title'));
    }

}
