<?php

namespace App\Http\Controllers\User\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class AdvanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id) {

        $current_lesson = Lesson::where('id', $id)
                                ->where('course_id', 3)->first();

        $lesson = Lesson::where('course_id', 3)
                        ->orderBy('sequence', 'asc')
                        ->get();

        if(!$current_lesson){
        $current_lesson = Lesson::where('id', 1)
                                ->where('course_id', 3)->first();
        }

        return view('user.course.lessons.beginners', compact('lesson', 'current_lesson'));
    }

    public function lesson()
    {
        return view('user.course.lessons.index');
    }
}
