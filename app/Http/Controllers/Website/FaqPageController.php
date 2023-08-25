<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqPageController extends Controller
{
    public function index() {
        return view('website.pages.faq');
    }
}
