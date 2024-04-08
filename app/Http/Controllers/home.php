<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator; // Import Validator facade
use Hash;


class Home extends Controller
{
    public function signuppage()
    {
        return view('registererror');
    }

    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:6',
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email|unique:users', 
            'password' => 'required|specialcharactore:1|min:8',
            'check' => 'accepted', 
        ],[
            'check.accepted' => 'You must accept our terms and conditions.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('registerpage')->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'image' => $request->image,
        ];
       
        $user = User::create($data);
        
      $credentials = $request->only('name','email','username', 'password'); 

        if (Auth::attempt($credentials)) {
           
            $user = Auth::user();
            $users = $user->users;
          

            return redirect()->route('profilepost',compact('users'))->with('success', 'You have been logged in successfully.');
        } 
        Mail::to($save->email)->send(new RegisterMail($save));

        if (!$user) {
            return redirect()->route('registerpage')->with("error", "Registration failed");
        }

     
    }
    public function profile(){

        return view('profile');

    }
 public function profilepost(Request $request)
{
    $validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'location' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->route('profile')->withErrors($validator)->withInput();
    }
    
    $user = auth()->user();
    
    if (!$user) {
        return redirect()->route('profile')->with("error", "User not found.");
    }
    
    $image = $request->file('image');
    $location = $request->input('location');
    
    // Save the location to the user record
    $user->location = $location;
    $user->save();
    
    if ($image) { // Check if an image is uploaded
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('profiles'), $imageName);
        $user->image = $imageName;
        $user->save();
    }

    // Redirect to the profile page
    return redirect()->route('select')->with('success', 'Profile updated successfully.');
}

public function profilefinder(){
    return view('profilefinder');
}
public function select(){
    return view('select');
}
public function home(){
    return view('home');
}
public function selectpost(Request $request)
{
    // Retrieve all users
    $users = User::all();


    foreach ($users as $user) {
        // Check if the user has an email address
        if ($user->email) {
            // Send the verification email
            Mail::send('emails.Register', ['user' => $user], function ($message) use ($user) {
                $message->to($user->email)->subject('Email Verification');
            });
        }
    }

    return redirect()->route('home')->with('message', 'Verification emails sent successfully.');
}

public function homemain(){
    return view('homemain');
}

}