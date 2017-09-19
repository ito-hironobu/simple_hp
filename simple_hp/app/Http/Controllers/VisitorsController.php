<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function index(){
    	return view('visitors.index');
    }

    public static function fetchCounter(){
    	// $visitors = DB::table('total_visitors')->where('id', 1)->value('total_visitors');
    	include('./php/update_counter.php');
    	return $visitors_num;
    }
}
