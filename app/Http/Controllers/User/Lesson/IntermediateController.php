<?php

namespace App\Http\Controllers\User\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class IntermediateController extends Controller
{
    public function index($id) {

        $current_lesson = Lesson::where('course_id', $id)->first();

                        $lesson = Lesson::where('course_id', $id)
                        ->orderBy('sequence', 'asc')
                        ->get();

                        // dd($lesson);

        
        return view('user.course.lessons.beginners', compact('lesson', 'current_lesson'));
    }
}
