<?php

namespace App\Http\Controllers;

use App\IPGOD201;
use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
class IPGOD201Controller extends Controller
{
    public function index(){
        $records= IPGOD201::paginate(10);

        return view('IPGOD201', compact('records'));
    }}
