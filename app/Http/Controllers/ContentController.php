<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;

class ContentController extends Controller
{
    public function home()
    {
        $projects = Project::all();
        $technologies = Technology::all()->groupBy('category');
        return view('home.index', compact('projects', 'technologies'));
    }


    public function about()
    {
        $technologies = Technology::all()->groupBy('category');
        return view('about-detail', compact('technologies'));
    }

    public function projects() {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function contact() {
        return view('contact-me');
    }
}
