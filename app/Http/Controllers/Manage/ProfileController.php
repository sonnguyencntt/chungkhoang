<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\Manage\Profile\UpdateRequest;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id_tai_khoan', \Auth::user()->id_tai_khoan)->first();

        return \view("pages.admin.profile.index", \compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $req)
    {


        if (\is_null($req->setting_password) == false) {
            $this->validate($req, [
                'setting_password' => 'required|same:setting_cpassword'
            ], [
                'setting_password.same' => "Nhập lại mật khẩu sai"
            ]);

            try {
                User::where('id_tai_khoan', $req->id_tai_khoan)
                    ->update(['ho_va_ten' => $req->ho_va_ten , 'sdt'=>$req->sdt , "mat_khau" => bcrypt($req->setting_password)]);
                    return  \redirect()->back()->with(["flag"=>"success" , "message"=>"Cập nhật dữ liệu thành công"]);


            } catch (\Throwable $th) {
                return  \redirect()->back()->with(["flag"=>"danger" , "message"=>"Cập nhật dữ liệu thất bại, vui lòng kiểm tra lại"]);

            }
            exit();
        }
        try {
            User::where('id_tai_khoan', $req->id_tai_khoan)
                ->update(['ho_va_ten' => $req->ho_va_ten , 'sdt'=>$req->sdt]);
                return  \redirect()->back()->with(["flag"=>"success" , "message"=>"Cập nhật dữ liệu thành công"]);


        } catch (\Throwable $th) {
            return  \redirect()->back()->with(["flag"=>"danger" , "message"=>"Cập nhật dữ liệu thất bại, vui lòng kiểm tra lại"]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
