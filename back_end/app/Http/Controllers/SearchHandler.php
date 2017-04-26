<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchHandler extends Controller{
    public function search(Request $req){
    	$query = $req->get("q");
    	$type = $req->get("type");
    	if($type == "user"){
			$user_result = DB::table('users')
						 -> where('name', 'LIKE', "%$query%")
						 -> get();
	        return view('search-result', ['result' => $user_result, 'query' => $query, 'type' => $type]);
	    }
    	if($type == "topik"){
			$thread_result = DB::table('threads')
						   -> join('users', 'users.id', '=', 'threads.owner_id')
						   -> select('threads.*', 'users.name AS thread_maker')
						   -> where('threads.name', 'LIKE', "%$query%")
						   -> get();
	        return view('search-result', ['result' => $thread_result, 'query' => $query, 'type' => $type]);
	    }
        return view('search-result', ['result' => array(), 'query' => "", 'type' => ""]);
    }
}
