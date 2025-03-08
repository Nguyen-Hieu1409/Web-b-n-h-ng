<?php
namespace App\Controllers;
use App\Models\User;
class AuthController{
    public function login(){
           return view('auth.login');
    }
    // xu li dang nhap
    public function postLogin(){
        $data =$_POST;
         if(trim($data['username']== "")){
            $errors['message'] ="Username hoac password phai nhap";
         }
         if(trim($data['password']== "")){
            $errors['message'] ="Username hoac password phai nhap";
         }
         if(isset($errors)){
            return view('auth.login',compact('data','errors'));
         }
         $user= User::where('username', '=', $data['username'])->first();
         if(!$user){
            $errors['message'] = "Username Hoac Password khong chinh xac";
         }else{
            //kiem mk cua user
            if(password_verify($data['password'],$user->password)){
              $_SESSION['user'] =$user;
              redirect('admin');
            }else{
                $errors['message'] = "Username Hoac Password khong chinh xac";
            }
         }
         if(isset($errors)){
            return view('auth.login',compact('data','errors'));
         }

    }
    public function register(){
         return view('auth.register');
    }
    public function store(){
        $data=$_POST;
        // Mã hóa mk
        $data ['password']= password_hash($data['password'] , PASSWORD_DEFAULT);
        User::create($data);
        return redirect('login');
    }
   public function logout(){
    if(isset($_SESSION['user'])){
        unset ($_SESSION['user']); 
    }
    return redirect('login');
   }
}