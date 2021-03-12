<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testing;

class TestinController extends Controller
{
    //
    public function students(Request $request)
    {
        $items = Testing::all();
       

        return response()->json(array('posts'=>$items));
    }
}
