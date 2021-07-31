@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        THÊM MỚI
        <small>Bài viết</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
        <li class="active">Thêm mới bài viết</li>
      </ol>
    </section>

    <!-- Main content -->



    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
    
          <div id="messages"></div>
    
    
    
          <div class="box">
            <div class="box-header">
            </div>
            <form role="form" action="?controller=category&action=insert&type=admin" onsubmit="return validate();" method="post" enctype="multipart/form-data">
                                    
              <div class="box-body">
              <input type="hidden" value="" class="form-control" id="id" name="id" placeholder="Enter group name" autocomplete="off" required>
              
                         
    
              <div class="form-group">
    
                <label for="product_image">Ảnh</label>
                <div class="kv-avatar">
                  <div class="file-loading">
                    <input id="product_image" name="product_image" type="file" >
  
                  </div>
                </div>
                <p id="err_product_image" class="hide-elm text-danger">Vui lòng chọn ảnh</p>
  
              </div>
                
                <div class="form-group">
                  <label for="product_name" >Ngày đăng</label>
                  <input type="text" class="form-control" id="product_name" value=" " name="product_name" placeholder="Nhập số điện thoại" autocomplete="off" value="" disabled />
    
                </div>
    
              
                <div class="form-group">
                  <label for="product_name" >Tiêu đề</label>
                  <input type="text" class="form-control" id="product_name" value=" " name="product_name" placeholder="Nhập số lượng" autocomplete="off" value="" />
                  <p id="err_product_name" class="hide-elm text-danger">Tiêu đề không được để trống</p>
    
                </div>
    
              
    
               
                
                <div class="form-group">
                  <label for="product_name" >Tóm tắt</label>
                  <input type="text" class="form-control" id="product_name" value=" " name="product_name" placeholder="Nhập địa chỉ" autocomplete="off" value="" />
                  <p id="err_product_name" class="hide-elm text-danger">Nội dung tóm tắt không được để tróng</p>
    
                </div>
                
                <div class="form-group">
                    <label for="category">Danh mục</label>
                    <select class="form-control " id="category"  name="category">
                      <option value="1" selected >Nhóm</option>
                      <option value="2" >ABC</option>
      
                    </select>
                    <p id="err_category" class="hide-elm text-danger">Danh mục không được để trống</p>
      
                  </div>

                  <div class="form-group">
                    <label for="category">Nội dung</label>
                    <textarea name="txtContent" class="form-control " id="editor"></textarea>
                    <p id="err_category" class="hide-elm text-danger">Nội dung không được để trống</p>
      
                  </div>
              
                 
    
              </div>
              <!-- /.box-body -->
    
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="manage_song.php" class="btn btn-warning">Back</a>
              </div>
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
    
    
    </section>
    <script src="/assets/admin/dist/js/product.js"></script>         <!-- /.content -->

    <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('editor'); </script>  </div>
  @stop