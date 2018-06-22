<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('backEnd.user.profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){
    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		$path = public_path('img/uploads/avatars/' . $filename);
    		Image::make($avatar->getRealPath())->resize(300, 300)->save($path);
    		$user = Auth::user();
    		$user->avatar = 'img/uploads/avatars/'.$filename;
            /* $user->avatar = "{{ asset('img/uploads/avatars/".$filename."') }}"; */
			$user->save();

    		/*
			Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    		*/

    	}

    	return view('backEnd.user.profile', array('user' => Auth::user()) );

    }

     public function update(Request $request)
    {
        
        $usuario = User::findOrFail($request->users_id);

        $usuario->update($request->all());
       
        return back();
    
    }
}