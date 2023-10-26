<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Psy\Readline\Hoa\Console;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function show(){
        $jsonString = file_get_contents(base_path('public/testimonials.json'));
        
        $data = json_decode($jsonString, true);

        return view('pages/about-us', ['data' => $data]);
    }
}
