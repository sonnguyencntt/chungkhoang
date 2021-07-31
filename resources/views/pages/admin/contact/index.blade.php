@extends('layouts.admin.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Khách hàng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bảng điều khiển</a></li>
        <li class="active">Quản lý khách hàng</li>
      </ol>
    </section>

    <!-- Main content -->



    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">

          <div id="messages">
          </div>

        


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách khách hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="manageTable" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID Khách hàng</th>

                    <th>Họ và tên</th>
                    <th>Dịch vụ tư vấn</th>
                   <th>Email</th>

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


    </section>
    <script src="/assets/admin/dist/js/store.js"></script>
    <!-- /.content -->
  </div>
  @stop