<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\Manage\Auth\LoginRequest;
use App\Http\Requests\Manage\Auth\ForgetRequest;

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
    public function postLogin(LoginRequest $req)
    {

        $credentials = array("email" => $req->email, "password" => $req->password);
        if (\Auth::attempt($credentials)) {
            session_start();
            $_SESSION['ckfinder_auth'] = true;
            return redirect()->route("manage.dashboard.index");
        } else {
            return \redirect()->back()->with(["flag" => "danger", "message" => "Đăng nhập không thành công"]);
        }
    }

    public function postLogout()
    {
        \Auth::logout();
        session_start();
        unset($_SESSION['ckfinder_auth']);
        return redirect()->route("manage.auth.index");
    }

    public function forgot()
    {
        return \view("pages.admin.auth.forgot");
    }

    public function postEmail(ForgetRequest $req)
    {
      
        $user =  User::where('email', $req->email)->first();

        if ($user) {
            $random = \Str::random(8);
            $newPassword = \bcrypt($random);
            $infoResetPassord = [
                'user' => $user,
                'newpassword' => $random
            ];

            try {
                User::where('email', $req->email)
                    ->update(['mat_khau' => $newPassword]);
                $user->notify(new SendEmailResetPassword($infoResetPassord));

                return  \redirect()->back()->with(["flag" => "success", "message" => "Gửi Email thành công , Vui lòng kiểm tra email"]);
            } catch (\Throwable $th) {
                return \redirect()->back()->with(["flag" => "danger", "message" => "Đã xãy ra lỗi, vui lòng thử lại sau 30 phút"]);
            }
        } else {
            return \redirect()->back()->with(["flag" => "danger", "message" => "Email không tồn tại trong danh sách"]);
        }
    }
}
