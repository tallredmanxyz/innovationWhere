<?php

namespace App\Http\Controllers;

use App\IPGOD101;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
class IPGOD101Controller extends Controller
{
    public function index(){
        $records= IPGOD101::paginate(10);

        return view('IPGOD101', compact('records'));
    }}
