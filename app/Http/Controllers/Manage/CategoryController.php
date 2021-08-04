<?php

namespace App\Http\Controllers\Manage;
use App\Danhmucbaiviet;
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
        return \view("pages.admin.category.index");

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
        
        if($request->isMethod('post')){
            
        $ten_danh_muc=$request->input('ten_danh_muc');
        $danhmucbaiviet= new Danhmucbaiviet();
        $ldate = date('Y-m-d H:i:s');
        
        $danhmucbaiviet->id_danh_muc="CA".$ldate;
        $danhmucbaiviet->ten_danh_muc=$ten_danh_muc;
        $danhmucbaiviet->save();
        }
        if($danhmucbaiviet)
        {
            return ["kết quả "=>"thêm thành công "];
        }
        else
        {
            return ["kết quả "=>"thêm không thành công "];
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $danhmucbaiviet=Danhmucbaiviet::find($id);
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
        $danhmucbaiviet=Danhmucbaiviet::find($id);
        $id_danh_muc=$request->input('id_danh_muc');
        $ten_danh_muc=$request->input('ten_danh_muc');
        $danhmucbaiviet->id_danh_muc=$id_danh_muc;
        $danhmucbaiviet->ten_danh_muc=$ten_danh_muc;

        $danhmucbaiviet->save();
        if($danhmucbaiviet)
            {
                return ["kết quả "=>"update thành công "];
            }
            else
            {
                return ["kết quả "=>"update không thành công "];
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
        $danhmucbaiviet=Danhmucbaiviet::find($id);
        $resuls=$danhmucbaiviet->delete();
            if($resuls)
            {
                return ["kết quả "=>"xóa thành công "];
            }
            else
            {
                return ["kết quả "=>"xóa không thành công "];
            }
    }
}
