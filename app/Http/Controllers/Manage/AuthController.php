<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view("pages.admin.auth.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $req){
   
        $this->validate($req,
        [
            'email' => "required|email",
            'password'=> "required|min:5|max:20"
        ],
        [
            'email.required' => "Vui lòng nhập Email",
            "email.email" => "Email không đúng định dạng",
            "password.required" => "Vui lòng nhập mật khẩu",
            "password.min" => "Mật khẩu ít nhất 6 kí tự",
            "password.max" => "Mật khẩu không quá 20 kí tự"
        ]);
        
        $credentials = array("email"=>$req->email , "password"=>$req->password);
        if(\Auth::attempt($credentials)){
            
            return redirect()->route("manage.dashboard.index");

        }
        else
        {
            return \redirect()->back()->with(["flag"=>"danger" , "message"=>"Đăng nhập không thành công"]);        }
    }

    public function postLogout(){
        \Auth::logout();
        return redirect()->route("manage.auth.index");
    }

    public function forgot()
    {
        return \view("pages.admin.auth.forgot");
    }

    public function postEmail(){
        
    }
}
