<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function change_profile(Request $request)
    {
        User::where('id', auth()->user()->id)->update($request->except(['_token']));

        return redirect()->route('user-profile')->with([
            'status' => 'success', 'message' => 'Your profile has been successfully updated.'
        ]);
    }

    public function change_password(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if(!Hash::check($request->password, $user->password)) {
            return redirect()->route('user-profile')->with([
                'status' => 'danger', 'message' => 'Your current password is incorrect.'
            ]);
        }elseif($request->newpassword1 !== $request->newpassword2){
            return redirect()->route('user-profile')->with([
                'status' => 'danger', 'message' => 'Passwords do not match.'
            ]);
        }else{
            User::where('id', auth()->user()->id)->update(['password' => Hash::make($request->newpassword1)]);
            return redirect()->route('user-profile')->with([
                'status' => 'success', 'message' => 'Your password has been updated successfully.'
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        session()->flash('message', 'See you :D');
        return redirect(route('login'));
    }
}
