<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = config('projects_data');

        return view('pages.projects', compact('projects'));
    }
}
