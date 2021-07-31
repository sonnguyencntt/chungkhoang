@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Danh mục</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
        <li class="active">Quản lý danh mục</li>
      </ol>
    </section>

    <!-- Main content -->



    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages">
          </div>

          <button class="btn btn-primary " data-toggle="modal" data-target="#addModal">Thêm danh mục</button>
          <br /> <br />


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách danh mục</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID danh mục</th>

                    <th>Tên mục</th>
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

      <div class="modal fade" tabindex="-1" role="dialog" id="addModal" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Thêm danh mục</h4>
              <div class="progress hide-elm" id="progress" style="margin-bottom: 0px !important;">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40"
                  aria-valuemin="0" aria-valuemax="100" style="width:0%">
                  0%
                </div>
              </div>
            </div>

            <form role="form" action="#" method="post" id="createForm">

              <div class="modal-body">

                  <div class="form-group">
                      <label for="brand_name">ID danh mục</label>
                      <input type="text" class="form-control" id="store_name" name="store_name"
                        placeholder="Id tự động" autocomplete="off" disabled>
                      <p id="err_store_name" class="hide-elm text-danger"></p>
                    </div>
                <div class="form-group">
                  <label for="brand_name">Tên danh mục</label>
                  <input type="text" class="form-control" id="store_name" name="store_name"
                    placeholder="Nhập tên danh mục" autocomplete="off">
                  <p id="err_store_name" class="hide-elm text-danger">Tên danh mục không được để trống</p>
                </div>
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- edit brand modal -->
      <div class="modal fade" tabindex="-1" role="dialog" id="editModal" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Chỉnh sửa danh mục</h4>
              <div class="progress hide-elm" id="progress-edit" style="margin-bottom: 0px !important;">
                <div class="progress-bar progress-bar-striped active" id="progress-bar-edit" role="progressbar"
                  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                  0%
                </div>
              </div>
            </div>
            <form role="form" action="stores/update" method="post" id="updateForm">
              <div class="modal-body">
                <div id="messages"></div>
                <input type="hidden" id="edit_id_store" name="edit_id_store">
               
                <div class="form-group">
                  <label for="brand_name">ID danh mục</label>
                  <input type="text" class="form-control" id="store_name" name="store_name" value="1"
                    placeholder="Id auto complement" autocomplete="off" disabled>
                  <p id="err_store_name" class="hide-elm text-danger">The Store name field is required.</p>
                </div>
            <div class="form-group">
              <label for="brand_name">Tên danh mục</label>
              <input type="text" class="form-control" id="store_name" name="store_name" value="Thái Bình"
                placeholder="Enter category name" autocomplete="off">
              <p id="err_store_name" class="hide-elm text-danger">Tên danh mục không được để trống</p>
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" id="submit-edit" class="btn btn-primary">Lưu thay đổi</button>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!-- remove brand modal -->
      <div class="modal fade" tabindex="-1" role="dialog" id="removeModal" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Xóa danh mục</h4>
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
                Bạn có muốn xóa danh mụcr ID : 0001
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Xóa</button>
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