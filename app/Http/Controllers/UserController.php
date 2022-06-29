<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

//name
//email
//phone
class UserController extends Controller
{
    public function index(){
        return view('user_dashboard');
    }
    public function create(){
        //load registration view
    }

    public function register(Request $request){
        DB::beginTransaction();
        try{
            User::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password),
                'phone'=>$request->phone
            ]);
           
        }catch(QueryException $ex){
            DB::rollBack();
            return $ex->getMessage();
        }
        DB::commit();
        return back();
          
    }
    public function sendVerificationMail($email){
        //send verification code to user through email
    }
    public function verifyCode(Request $req,$user_id,$code){
        $user = User::find($user_id);
        $verification_code = $user->verification_code;
        if($req->code == $verification_code ){
              return view('users.login');
          $user->verification_code->delete();
        }else {
           return response()->json(['message'=>'Invalid code']);
        }

    }

    public function generateVerificationCode(){
        //generate random verification codes for the user
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.update',[$user]);
    }
   
    public function update(Request $req,$id){
        $user = User::find($id);
        DB::beginTransaction();
        try{
            $user->update([
                'first_name'=>$req->firstname,
                'last_name'=>$req->lastname,
                'email'=>$req->email,
                'phone'=>$req->phone,
            ]);

        }catch(QueryException $ex){
            DB::rollBack();
            return back()->with($ex->getMessage());
        }
    }
    public function registerView(){
        return view('auth.register');

    }
    public function loginView(){
        return view('auth.login');

    }

    public function login(Request $req){
        $username = $req->username;
        $password = $req->password;
        $user = User::where('email',$username)->get();
        if($user){
            if($password == Hash::check($user->password)){
                if($user->is_admin == true){
                    //$token = generateToken
                    return view('users/admin',$user);//redirect to admin dashboard
                }else{
                  return view('user_dashboard',$user);
                }
            }else{
                $error = "Wrong cridentials!!Check and try again";
            }
        }

    }
}
