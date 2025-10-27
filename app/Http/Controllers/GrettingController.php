<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrettingController extends Controller
{
    public function greeting($userid, $name)
    {

        return view('greeting', [
            'id' => $userid,
            'name' => $name
        ]);
    }
}
