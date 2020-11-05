<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $activeJobs = JobPost::isActive()->get();

        return view('welcome', compact('activeJobs'));
    }
}
