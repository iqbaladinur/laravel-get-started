<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function homePage(){
         $learnTopics = array(
            'getting started',
            'composer',
            'routing',
            'view',
            'templating engine blade',
            'artisan command',
            'controller',
            'transfer data (form)',
            'database migration',
            'eloquent'
        );
        return view('pages.home', array("data" => $learnTopics));
    }
}
