<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        // return view('index',compact('title'));
        return view('index')->with('title',$title);
    }
    public function about(){
        $title = 'About Us';
        return view('about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web Design', 'Programming','SEO']
        );
        return view('services')->with($data);
    }
}
