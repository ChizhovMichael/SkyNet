<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetJsonController extends Controller
{
    //
    public function GetJson() 
    {

        $url = 'http://sknt.ru/job/frontend/data.json';

        $collection = json_decode(file_get_contents($url), true);

        $collection = collect($collection);

        $collection = $collection->forget('result');

        $collection = $collection->flatten(1);

                
        return view('welcome', [
            'content' => response()->json($collection)->getContent(),
        ]);

    }
}
