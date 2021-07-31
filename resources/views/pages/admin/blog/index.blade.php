@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>bài viết</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
        <li class="active">Quản lý bài viết</li>
      </ol>
    </section>

    <!-- Main content -->



    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages">
          </div>

          <a class="btn btn-primary" href="{{route('manage.blog.create')}}">Thêm mới bài viết</a>

          <br /> <br />


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách bài viết</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID Bài Viết</th>

                    <th>Hình Ảnh</th>
                    <th>Ngày Đăng</th>
                    <th>Tiêu Đề</th>
                    <th>Tóm Tắt</th>
                    <th>Danh mục</th>
                    <th>Nội dung</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                 
        

               


                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- col-md-12 -->
      </div>


    
      <!-- remove brand modal -->
      <div class="modal fade" tabindex="-1" role="dialog" id="removeModal" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Remove Singer</h4>
              <div class="progress hide-elm" id="progress-remove" style="margin-bottom: 0px !important;">
                <div class="progress-bar progress-bar-striped active" id="progress-bar-remove" role="progressbar"
                  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                  0%
                </div>
              </div>
            </div>
            <form role="form" action="#" method="post" id="removeForm">
              <div class="modal-body">
                <input type="hidden" name="remove_id_store">
                <input type="hidden" name="remove_td">

                <!-- <div class="alert-remove">
                </div> -->
                Bạn có muốn xóa danh mục ID : 0001
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </section>
    <script src="/assets/admin/dist/js/store.js"></script>
    <!-- /.content -->
  </div>
  @stop