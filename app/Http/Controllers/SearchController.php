<?php

namespace App\Http\Controllers;

use App\IPGOD204;
use App\User;
use DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use View;
use App\Http\Requests;
class SearchController extends Controller
{
    public function getSearch(Request $request)
    {
        //get keywords input for search
        $keyword=  $request->input('searchQuery');

        //search that student in Database
       /* $records= IPGOD204::where('DESCRIPTION', 'like', "%$keyword%")
            ->paginate(10);*/

        $records = DB::select('SELECT t2.lon, t2.lat, t2.cleanname, t2.tm_number
FROM IPGOD202 t2
INNER JOIN IPGOD204_CONCAT t4 ON t2.tm_number = t4.tm_number
WHERE MATCH(DESCRIPTION) against (? IN NATURAL LANGUAGE MODE)
LIMIT 0 , 200', [$keyword]);

        //return display search result to user by using a view
        //return View::make('results')->with('record', $records);
        //return view('results', compact('records'));

        return response()->json($records);
    }

}
