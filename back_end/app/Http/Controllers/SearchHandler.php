<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchHandler extends Controller{
    public function search(Request $req){
    	$query = $req->get("q");
    	$type = $req->get("type");

        \App\UserActivity::searchActivity("Search $type, Query = $query");

    	if($type == "user"){
			$user_result = DB::table('users')
						 -> where('name', 'LIKE', "%$query%")
                         /*->orWhere('address', 'LIKE', "%$query%")*/
                         ->orWhere('needs', 'LIKE', "%$query%")
                         ->orWhere('products', 'LIKE', "%$query%")
                         ->orWhere('description', 'LIKE', "%$query%")
                         ->orWhere('organization_name', 'LIKE', "%$query%");

            if ($req->lokasi) {
                $location = $req->lokasi;
                $user_result = $user_result->where('address', 'LIKE', "%$location%");
            }

            if ($req->kategori && $req->kategori != 0) {
                $user_result = $user_result->where('role_id', $req->kategori);
            }

            $user_result = $user_result->get();

	        return view('search-result', ['result' => $user_result, 'query' => $query, 'type' => $type]);
	    }
    	if($type == "topik"){
			$thread_result = DB::table('threads')
						   -> join('users', 'users.id', '=', 'threads.owner_id')
                           -> join('forum_posts', "forum_posts.thread_id", '=', "threads.id")
                           -> select('threads.*', 'users.name AS thread_maker', \DB::raw('count(*) as post_count'))
                           -> groupBy("threads.id")
						   -> where('threads.name', 'LIKE', "%$query%")
                           ->orderBy('post_count');

            if ($req->forum && $req->forum != 0) {
                $thread_result = $thread_result->where('forum_id', $req->forum);
            }

            if ($req->start) {
                $thread_result = $thread_result->where('threads.created_at', '>=', new \Carbon\Carbon($req->start));
            }

            if ($req->end) {
                $thread_result = $thread_result->where('threads.created_at', '<=', new \Carbon\Carbon($req->end));
            }

            if ($req->min) {
                $thread_result = $thread_result->having('post_count', '>=', $req->min);
            }

            /*if ($req->max) {
                $thread_result = $thread_result->having('post_count', '<=', $req->max);
            }*/

            $thread_result = $thread_result-> get();
	        return view('search-result', ['result' => $thread_result, 'query' => $query, 'type' => $type]);
	    }

        return view('search-result', ['result' => array(), 'query' => "", 'type' => ""]);
    }
}
