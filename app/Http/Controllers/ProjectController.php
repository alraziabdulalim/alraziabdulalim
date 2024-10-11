<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Storage::json('projects.json');

        return view('projects.index', compact('projects'));
    }

    public function show($project)
    {
        $projects = Storage::json('projects.json');

        $project = collect($projects)->firstWhere('id', $project);

        if (!$project) {
            abort(404, 'Project not found');
        }

        return view('projects.show', compact('project'));
    }
}
