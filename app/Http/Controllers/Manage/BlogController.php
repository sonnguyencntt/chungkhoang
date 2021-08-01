<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $gethinhthe = '';
	if($request->hasFile('hinhthe')){
		//Hàm kiểm tra dữ liệu
		$this->validate($request, 
			[
				//Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
				'hinhthe' => 'mimes:jpg,jpeg,png,gif|max:2048',
			],			
			[
				//Tùy chỉnh hiển thị thông báo không thõa điều kiện
				'hinhthe.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
				'hinhthe.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
			]
		);
		
		//Lưu hình ảnh vào thư mục public/upload/hinhthe
		$hinhthe = $request->file('hinhthe');
		$gethinhthe = time().'_'.$hinhthe->getClientOriginalName();
		$destinationPath = public_path('upload/hinhthe');
		$hinhthe->move($destinationPath, $gethinhthe);
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
    public function update(Request $request, $id)
    {
        //
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
