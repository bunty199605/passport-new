<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;


class DetailsController extends Controller
{
    public function index(){
    	return DB::all();
    }
}
