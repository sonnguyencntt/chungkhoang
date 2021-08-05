<?php

namespace App\Http\Controllers\Manage;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Response;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_category = Category::all();
        return \view("pages.admin.category.index", \compact('list_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view("pages.admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tendanhmuc' => 'required'
        ], [
            'tendanhmuc.required' => "Tên danh mục không được để trống"
        ]);

        try {
            $iddanhmuc = "CAID" . \Carbon::now()->timestamp;

            $category = Category::create([
                'id_danh_muc' => $iddanhmuc,
                'ten_danh_muc' => $request->tendanhmuc,
            ]);
            return  \redirect()->back()->with(["flag" => "success", "message" => "Cập nhật dữ liệu thành công"]);
        } catch (\Throwable $th) {
            return  \redirect()->back()->with(["flag" => "danger", "message" => "Thêm dữ liệu thất bại, vui lòng kiểm tra lại"]);
        }
        exit();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $danhmucbaiviet = Danhmucbaiviet::find($id);
        return response()->json($danhmucbaiviet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \view("pages.admin.category.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $danhmucbaiviet = Danhmucbaiviet::find($id);
        $id_danh_muc = $request->input('id_danh_muc');
        $ten_danh_muc = $request->input('ten_danh_muc');
        $danhmucbaiviet->id_danh_muc = $id_danh_muc;
        $danhmucbaiviet->ten_danh_muc = $ten_danh_muc;

        $danhmucbaiviet->save();
        if ($danhmucbaiviet) {
            return ["kết quả " => "update thành công "];
        } else {
            return ["kết quả " => "update không thành công "];
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
        try {
            Category::where('id_danh_muc', $id)->delete();
            return \redirect()->back()->with(["flag" => "success", "message" => "Xóa dữ liệu thành công"]);
        } catch (\Throwable $th) {
            return \redirect()->back()->with(["flag" => "danger", "message" => "Xóa dữ liệu không thành công"]);
        }
    }
}
