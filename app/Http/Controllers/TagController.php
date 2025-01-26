<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Models\Job;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs()->with('employer', 'tags')->get();
        return view('tag_search', ['jobs'=>$jobs]);
    }
}
