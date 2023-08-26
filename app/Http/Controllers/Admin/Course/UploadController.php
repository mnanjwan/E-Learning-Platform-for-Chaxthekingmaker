<?php

namespace App\Http\Controllers\Admin\Course;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the "admin" guard
    }

    public function index()
    {

        return view('admin.course.add');
    }

    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'course_id' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|numeric',
            'video_url' => 'required|string',
            'sequence' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $lesson = new Lesson();
        $lesson->title = $request->input('title');
        $lesson->course_id = $request->input('course_id');
        $lesson->description = $request->input('description');
        $lesson->duration = $request->input('duration');
        $lesson->video_url = $request->input('video_url');
        $lesson->sequence = $request->input('sequence');
        $lesson->save();

        return redirect()->back()->with('success', 'Lesson added successfully');

    }
}
