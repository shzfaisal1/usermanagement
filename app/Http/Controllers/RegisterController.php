<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)

    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
        ]);
    
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone_number = $request->phone_number;
        $user->date_of_birth = $request->date_of_birth;
        $user->gender = $request->gender;
        $user->save();

        return redirect('/')->with('success', 'Registration successful! Please login to continue.');
    }


    public function UsersData(){
        $data = User::where('role','!=',1)->get();
        return view('admin.users.show',compact('data'));
    }

    public function edit($id){
        $editdata = User::findorfail($id);    
         return view('admin.users.edit',compact('editdata'));
     }

     public function add(){
        
         return view('admin.users.add');
     }
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|unique:users|max:255',
             'password' => 'required|string|min:8',
             'phone_number' => 'required|string|max:15',
             'date_of_birth' => 'required|date',
             'gender' => 'required|in:male,female',
         ]);
     
         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->phone_number = $request->phone_number;
         $user->date_of_birth = $request->date_of_birth;
         $user->gender = $request->gender;
         $user->save();
 
         return redirect()->back()->with('success', 'User add successfully!');
     }

    public function delete($id){
        User::findorfail($id)->delete();
        return redirect()->back()->with('success', 'Delete User successful!y.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
        ]);

        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->date_of_birth = $request->date_of_birth;
        $user->gender = $request->gender;
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully!');
    }

    public function forgetpasswordview(){
        return view('forget');
    }
}
