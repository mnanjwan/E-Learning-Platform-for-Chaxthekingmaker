<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index() {

        $page_title = "Contact Chaxthekingmaker";

        return view('website.pages.contact', compact('page_title'));
    }
}
