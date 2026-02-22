<?php

namespace App\Http\Controllers;

class CaseStudiesController extends Controller
{
    public function index()
    {
        $caseStudies = config('case_studies_data');
        return view('pages.case-studies', compact('caseStudies'));
    }
}
