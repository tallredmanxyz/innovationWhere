<?php

namespace App\Http\Controllers;

use App\IPGOD102;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
class IPGOD102Controller extends Controller
{
    public function index(){
        $records= IPGOD102::paginate(10);

        return view('IPGOD102', compact('records'));
    }}
