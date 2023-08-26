<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MentorshipPageController extends Controller
{
    public function index() {

        $page_title = "Mentorship Chaxthekingmaker";
        
        return view('website.pages.mentorship', compact('page_title'));
    }
}
