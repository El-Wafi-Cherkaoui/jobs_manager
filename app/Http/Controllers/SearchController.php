<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $search_jobs = Job::where('title', 'LIKE', '%'.request('search_inp').'%')->with(['employer', 'tags'])->get();
        return view('search_results', ['jobs'=>$search_jobs]);
    }
}
