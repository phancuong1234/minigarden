

@extends('templates.admin.master') {{-- kế thừa từ master.blade.php --}}
@section('content') {{-- gọi lại tên trong yield --}}
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="panel panel-back noti-box" style="border-radius: 50px; position: relative;background: #ded9e2;display: block;">
                     <span class="icon-box bg-color-green set-icon">
                     <i class="fas fa-th-list" style="position: absolute;top: 8px;left: 38px;"></i>
                     </span>
                     <div class="text-box">
                        <p class="main-text" style="margin-left: 57px;font-size: 20px;"><a href="{{-- {{Route('admin.nhansu.index')}} --}}" title="" style="color: darkblue;">Quản lý người dùng</a></p>
                        <p style="margin-left: 100px;">Có 10 Users</p>
                     </div>
                  </div>
               </div>
              <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="panel panel-back noti-box" style="border-radius: 50px; position: relative;background: #ded9e2;display: block;">
                     <span class="icon-box bg-color-green set-icon">
                     <i class="fas fa-th-list" style="position: absolute;top: 8px;left: 38px;"></i>
                     </span>
                     <div class="text-box">
                        <p class="main-text" style="margin-left: 57px;font-size: 20px;"><a href="{{-- {{Route('admin.nhansu.index')}} --}}" title="" style="color: darkblue;">Thư Viện Cây Trồng</a></p>
                        <p style="margin-left: 100px;">Có 10 Users</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop

