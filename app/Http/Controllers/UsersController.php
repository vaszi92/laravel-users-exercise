<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	    
            $users = \App\User::all();
            return view('pages.users', compact('users'));
            
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();
//                $input['password'] = bcrypt($input['password']);
                
                User::create($input);
                
                return redirect('users')->with([
                    'flash_message' => 'The user has been created.',
                    'flash_message_important' => 'true',
                ]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $user = User::findOrFail($id);
            
            return view('pages.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
            $user = User::findOrFail($id);
            $input = $request->all();
            
            $user->update($input);
            
            return redirect('users')->with([
                'flash_message' => 'The user has been updated.',
                'flash_message_important' => 'true',
            ]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $user = User::findOrFail($id);
            $user->delete();
            
            return redirect('users')->with([
                'flash_message' => 'The user has been deleted.',
                'flash_message_important' => 'true',
            ]);
	}

}
