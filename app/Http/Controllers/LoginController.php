<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
 
    public function loginUser(Request $request)
    {
       
        $request->validate([            
            'email'=>'required',
            'password'=>'required'
        ]);

        $user = User::where('email','=',$request->email)->first();
       
        if($user){        
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
               if($user->role == 1){
                return redirect('/dashboard');
               }else{
                return redirect('/userpage');
               }
                
            } else {
                return back()->with('fail','Password not match!');
            }
        } else {
            return back()->with('fail','This email is not register.');
        }        
    }


     
     public function dashboard()
     {
         
         $data = array();
         if(Session::has('loginId')){
             $data = User::where('id','=',Session::get('loginId'))->first();
         }
         return view('admin.admin_master',compact('data'));
     }
    
     
    public function update(Request $request)
    {
        
        $user = User::find($request->id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required'
           
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
       
        $user->save();

        return redirect('/userpage')->with('success', 'Profile updated successfully.');;
    }

     public function userpage()
     {
         
         $data = array();
         if(Session::has('loginId')){
             $data = User::where('id','=',Session::get('loginId'))->first();
         }
         return view('user.user',compact('data'));
     }
     public function logout()
     {
         $data = array();
         if(Session::has('loginId')){
             Session::pull('loginId');
             return redirect('/');
         }
     }
}
