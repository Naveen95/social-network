<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Illuminate\Contracts\Auth\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Auth;
use Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;

class UserProfileController extends Controller
{

 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function profileImage()
    {
    	return view('profileimage' , array('user'=>\Auth::user()));
    }

    public function profileImageUpload(Request $request)
    {

    	if($request->hasFile('avatar'))
    	{
    		$avatar = $request->file('avatar');
    		$filename = time().'.'.$avatar->getClientOriginalExtension();
    		Image::make($avatar)->save(public_path('/uploads/avatars/'.$filename));
    		$user=\Auth::user();
    		$user->avatar=$filename;
    		$user->save();
    	}

    	return view('profileimage' , array('user'=>\Auth::user()));

    }

    public function current_user()
    {


    	if(\Auth::check() && \Auth::user()->name) {
         
            return \Auth::user()->name;

        }
        
    }
    public function password_change(Request $request)
    {
    	$post = $request->all();
    	$pass_val = \Validator::make($request->all(),
    		[
    		'current_pass' => 'required',
    		'new_pass' => 'required',

    		]);

    	if ($pass_val ->fails()) 
	{
	
		return redirect()->back()->withErrors($pass_val->errors());
		
	}
	else
	{

		$pass_data = array(

			'current_pass' => $post['current_pass'],
			'new_pass' => $post['new_pass'],

			);
		$pass_data['new_pass'] = bcrypt($pass_data['new_pass']);

		

		if (\Hash::check($pass_data['current_pass'],\Auth::user()->password )) {

			$updatedata = DB::table('users')->where('name',\Auth::user()->name)
		->update(['password' => $pass_data['new_pass']]);

		if ($updatedata > 0) {
			return redirect('home');
		}

		else
		{
			return redirect()->back();
		}

			
		}

		else
		{

			return "not same";
		}

	}


    }




    public function prof_details(Request $request)
    {
    	$post = $request->all();

    	$val=\Validator::make($request->all(),

		[
		   'firstname' =>    'required',
		   'lastname' =>     'required',
		   'username' =>     'required',
		   'phone'=>         'required',
		   'nationality' =>  'required',
		   'dobmonth' =>     'required',
		   'dobyear' =>      'required',
		   'dobday' =>       'required',
		   'avatar' =>       'required',

		]


		);

	if ($val ->fails()) 
	{
	
		return redirect()->back()->withErrors($val->errors());
		
	}

	else
	{
		
		$data = array(

			'firstname' => $post['firstname'] ,
		   'lastname' => $post['lastname'],
		   'username' => $post['username'],
		   'phone' => $post['phone'],
		   'nationality' => $post['nationality'],
		   'dobmonth' => $post['dobmonth'],
		   'dobyear' => $post['dobyear'],
		   'dobday' => $post['dobday'],
		   


			);

		$updatedata = DB::table('users')->where('name',\Auth::user()->name)
		->update($data);

		

		if ($updatedata>0) {

			
            return redirect('home');
	}
	else
	{
		return "something";
	}


    }
}


}



