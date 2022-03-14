<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\userregistration;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
// Models
use App\Models\User;
// Encryption
use Illuminate\Encryption\Encrypter;
// use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException as Exception;

class siteController extends Controller
{
    public function index(){
        return view('Frontend.home');
    }
    public function singlePost(){
        return view('Frontend.single-post');
    }
    public function userregistration(){
        return view('Frontend.user-registration');
    }
    // public function requestforregistration(userregistration $request){
    // //    $validate = $request->validate([
    // //         'user-name'     => ['required','max:255'],
    // //         'email'         => 'required|email',
    // //         'password'      => 'required|min:8',
    // //    ]);
    // $validate = $request->validate();
    // }
    public function requestforregistration (Request $request){
        $rules = [
                'user_name'     => ['required','max:255'],
                'email'         => 'required|email',
                'password'      => 'required|min:8',
                'file'          => ['mimes:jpg,bmp,png,jpeg']
        ];
       $validate =  Validator::make($request->all(),$rules);
       if($validate->fails()){
           return redirect()->route('user.registerform')->withErrors($validate)->withInput();
        //  return redirect()->back()->withErrors($validate)->withInput();
       }

       $file =$request->file('file');
       if($request->hasFile('file')){
       $filename = rand('1111','999999').date('Ymdhis.').$file->getClientOriginalExtension();
       $file->storeAs('test',$filename,'public');
       }
           try{
            User::create([
                'name'           =>  $request->user_name,
                'email'          =>  $request->email,
                'password'       =>  bcrypt($request->password),
               ]);
               session()->flash('message','User has been registered');
             session()->flash('type', "success");

           } catch (Exception $ex) {
            session()->flash('type', "danger");
             session()->flash('message', "Error {$ex->getCode()} ! User registration failed");
           }
           return redirect()->back();
    }

    public function loginform(){
        if(auth()->id()) return  redirect('/');
        return view('Frontend.login');
    }
    public function login(Request $request){
    //    $log_rules = [
    //         'email'        =>  'required|email',
    //         'password'        =>  'required|min:8',
    //    ];
    //    $validate = Validator::make($request->all(),$log_rules);
    //    if($validate->fails()){
    //        return redirect()->back()->withErrors($validate)->withInput();
    //    }

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

       if(auth()->attempt($credentials)){
         auth()->user();
        return redirect()->intended(route('base_url'));
       }else{
        return redirect()->intended(route('user.login'));
       }
    }

    // Log out

    public function logout(){
        Auth::logout();
        return redirect()->intended(route('base_url'));
    }
}
