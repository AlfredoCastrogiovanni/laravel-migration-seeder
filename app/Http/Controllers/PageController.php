<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    function index() {
        $trains = Train::all();
        return view('train.index', ['trains' => $trains]);
    }
}
