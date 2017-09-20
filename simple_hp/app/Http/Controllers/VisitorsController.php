<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function index(){
    	$visitors_num = $this->fetchCounter();
    	return view('visitors.index')->with('counter', $visitors_num);
    }

    public function fetchCounter(){
    	include('./php/update_counter.php');
    	return $visitors_num;
    }
}
