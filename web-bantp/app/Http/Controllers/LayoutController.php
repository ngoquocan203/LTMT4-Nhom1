<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    //
    public function getLayout()
    {
    	return view('admin.layout.index');
    }
}
