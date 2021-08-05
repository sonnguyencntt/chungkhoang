<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\Category;
use App\Http\Requests\Manage\Blog\StoreRequest;
use App\Http\Requests\Manage\Blog\UpdateRequest;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return \view("pages.admin.blog.index",\compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return \view("pages.admin.blog.create", \compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
         

            try {
                $image = $request->file('hinhanh');
                $getImage = time() . '_' . $image->getClientOriginalName();
                $destinationPath = public_path('upload/blog_image');
                $image->move($destinationPath, $getImage);
            } catch (\Throwable $th) {
                return \redirect()->route('manage.blog.index')->with(["flag" => "danger", "message" => "Upload ảnh không thành công"]);
                
            }
            try {
                $ngaydang = \Carbon::now();
                $destinationPath = 'upload/blog_image/' . $getImage;
                $idbaiviet = "BLID".\Carbon::now()->timestamp;
                $idtaikhoan = \Auth::user()->id_tai_khoan;
                $blog = Blog::create([
                    'hinh_anh' => $destinationPath,
                    'ngay_dang' => $ngaydang,
                    'tieu_de' => $request->tieude,
                    'noi_dung' => $request->noidung,
                    'id_bai_viet' => $idbaiviet,
                    'id_taikhoan' => $idtaikhoan,
                    'id_danh_muc' => $request->iddanhmuc,
                ]);
                return \redirect()->route('manage.blog.index')->with(["flag" => "success", "message" => "Thêm mới dữ  thành công"]);
            } catch (\Throwable $th) {
                \unlink($destinationPath);
                return \redirect()->route('manage.blog.index')->with(["flag" => "danger", "message" => "Thêm mới dữ liệu không thành công"]);
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
        try {
            $blog = Blog::where('id_bai_viet', $id)->firstOrFail();      
            $category = Category::all();
            return \view("pages.admin.blog.edit" , \compact('blog' , 'category'));
        } catch (\Throwable $th) {
            return \view("pages.admin.errors.404",\compact('id'));              }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
   


        if ($request->hasFile('hinhanh')) {
            $this->validate(
                $request,
                [
                    'hinhanh' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],
                [
                    'hinhanh.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                    'hinhanh.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                ]
            );
            try {
                $image = $request->file('hinhanh');
                $getImage = time() . '_' . $image->getClientOriginalName();
                $destinationPath = public_path('upload/blog_image');
                $image->move($destinationPath, $getImage);
            } catch (\Throwable $th) {
                return \redirect()->route('manage.blog.index')->with(["flag" => "danger", "message" => "Upload ảnh không thành công"]);
                
            }
            try {
                $destinationPath = 'upload/blog_image/' . $getImage;
                $blog = Blog::where('id_bai_viet', $id)->first();
                $blog_image = $blog->hinh_anh;
                $update = Blog::where('id_bai_viet', $id)
                    ->update([
                        'hinh_anh' => $destinationPath,
                        'tieu_de' => $request->tieude,
                        'noi_dung' => $request->noidung,
                        'id_danh_muc' => $request->iddanhmuc,
                    ]);
                \unlink($blog_image);
                return \redirect()->route('manage.blog.index')->with(["flag" => "success", "message" => "Chỉnh sửa dữ  thành công"]);
            } catch (\Throwable $th) {

                \unlink($destinationPath);
                return \redirect()->route('manage.blog.index')->with(["flag" => "danger", "message" => "Chỉnh sửa dữ liệu không thành công"]);
                
            }
        } else {
            try {

                Blog::where('id_bai_viet', $id)
                    ->update([
                        'tieu_de' => $request->tieude,
                        'noi_dung' => $request->noidung,
                        'id_danh_muc' => $request->iddanhmuc,
                    ]);

                return \redirect()->route('manage.blog.index')->with(["flag" => "success", "message" => "Chỉnh sửa dữ  thành công"]);
            } catch (\Throwable $th) {
                return \redirect()->route('manage.blog.index')->with(["flag" => "danger", "message" => "Chỉnh sửa dữ liệu không thành công"]);
                
            }
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
        $blog = Blog::where('id_bai_viet', $id)->first();

        try {
            Blog::where('id_bai_viet', $id)->delete();
            \unlink($blog->hinh_anh);
            return \redirect()->route('manage.blog.index')->with(["flag" => "success", "message" => "Xóa dữ liệu thành công"]);

        } catch (\Throwable $th) {
            return \redirect()->route('manage.blog.index')->with(["flag" => "danger", "message" => "Xóa dữ liệu không thành công"]);
        }
    }

  
}
