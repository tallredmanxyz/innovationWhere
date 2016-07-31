<?php

namespace App\Http\Controllers;

use App\IPGOD204;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
class IPGOD204Controller extends Controller
{
    public function index(){
        $records= IPGOD204::paginate(10);

        return view('IPGOD204', compact('records'));
    }}


