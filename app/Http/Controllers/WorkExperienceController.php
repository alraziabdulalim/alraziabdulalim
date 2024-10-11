<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkExperienceController extends Controller
{
    public function index()
    {
        $experiences = Storage::json('experiences.json');

        return view('experiences.index', compact('experiences'));
    }
}
