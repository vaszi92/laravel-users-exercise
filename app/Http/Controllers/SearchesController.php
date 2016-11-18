<?php namespace App\Http\Controllers;

//use App\Http\Requests;
//use App\Http\Controllers\Controller;
//
//use Illuminate\Http\Request;
//
//class SearchesController extends Controller {
//
//	public function search(Request $request) {
//            
//            $keyword = $request->get('keyword');
//
//            if($keyword !== ''){
//                $users = \App\User::where("username", "LIKE","%$keyword%")
//                        ->orWhere("firstname", "LIKE", "%$keyword%")
//                        ->orWhere("lastname", "LIKE", "%$keyword%")
//                        ->orWhere("email", "LIKE", "%$keyword%")
//                        ->orWhere("phone", "LIKE", "%$keyword%")->get();
//                
//                    return view('pages.results', array( 'users' => $users ));
//                    
//            } elseif(empty($users) || $keyword == "") {
//                
//                    return view('pages.results');
//            }
//        }
//
//}
