<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
class PageController extends Controller


{
    public function index(){
        $projectList = project::all();
        return view('home', compact('projectList'));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}

