@extends('layouts.admin.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Hồ sơ</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->



    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">


        <div id="messages">
                <div class="alert alert- alert-dismissible hide-elm" role="alert" >
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button
        ><strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong></div>
      </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thông tin hồ sơ</h3>
            </div>
            <!-- /.box-header -->
            <form role="form" action="?controller=setting&action=update&type=admin" method="POST" onsubmit = "return validate();">
              <div class="box-body">

                
              <input type=hidden class="form-control" id="id_user" name="id_user" placeholder="Username" value="QL0812381282 " autocomplete="off">
              <div class="form-group">
                <label for="fname">Họ và tên</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="admin" autocomplete="off">
                <p id="err_fname" class="hide-elm text-danger">Họ và tên không được để trống</p>

              </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="admin@admin.com" autocomplete="off">
                  <p id="err_email" class="hide-elm text-danger">Email và tên không được để trống.</p>

                </div>                

             

             

                <div class="form-group">
                  <label for="phone">Số điện thoại</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="0xxxxxxx" autocomplete="off">
                  <p id="err_phone" class="hide-elm text-danger">Số điện thoại</p>

                </div>


                <div class="form-group">
                  <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Leave the password field empty if you don't want to change.
                  </div>

                </div>

                <div class="form-group">
                  <label for="password">Mật khẩu</label>
                  <input type="password" class="form-control" id="setting_password" name="password" placeholder="Password" autocomplete="off">
                  <p id="err_setting_password" class="hide-elm text-danger">Mật khẩu không được để trống.</p>

                </div>

                <div class="form-group">
                  <label for="cpassword">Nhập lại mật khẩu</label>
                  <input type="password" class="form-control" id="setting_cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
                  <p id="err_setiing_cpassword" class="hide-elm text-danger">Mật khẩu không được để trống.</p>

                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary ">Lưu thay đổi</button>
                <a href="?controller=profile&action=index&type=admin" class="btn btn-warning">Trở về</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
       
      </div>
      <!-- /.row -->
      

    </section>
    <script src="/assets/admin/dist/js/store.js"></script>
    <!-- /.content -->
  </div>
  @stop