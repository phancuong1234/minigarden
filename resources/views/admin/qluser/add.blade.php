

@extends('templates.admin.master')
@section('content')
<div class="content-wrapper">
   <div class="container">
      <div class="row pad-botm">
         <div class="col-md-12">
            <h4 class="header-line">Thêm Người Dùng</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
               <div class="panel-heading">
                  Thông Tin Người Dùng
               </div>
               @if (Session::has('error'))
               <p style="color:red">{{ Session::get('error') }}</p>
               @endif
               <div class="panel-body">
                  <form role="form" action="{{Route('admin.user.add')}}" enctype="multipart/form-data" method="post" class="form">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label>Tên tài khoản</label>
                        <input class="form-control" style="border: 1px solid #848484;" type="text" name="username" value="{{ $username}} " />
                        @if($errors->has('username'))
                        <b><font color="red">{{$errors->first('username')}}!</font></b>
                        @endif
                        <p class="help-block"><i style="color:red"></i></p>
                     </div>
                     <div class="form-group">
                        <label>Mật khẩu</label>
                        <input class="form-control" type="password" name="password" value="{{$password}}" />
                        @if($errors->has('password'))
                        <b><font color="red">{{$errors->first('password')}}!</font></b>
                        @endif
                        <p class="help-block"><i style="color:red"></i></p>
                     </div>
                     <div class="form-group">
                        <label>Tên đầy đủ</label>
                        <input class="form-control" type="text" name="fullname" value="{{ $fullname}} " />
                        @if($errors->has('fullname'))
                        <b><font color="red">{{$errors->first('fullname')}}!</font></b>
                        @endif
                        <p class="help-block"><i style="color:red"></i></p>
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" value="{{ $email}} " />
                        @if($errors->has('email'))
                        <b><font color="red">{{$errors->first('email')}}!</font></b>
                        @endif
                        <p class="help-block"><i style="color:red"></i></p>
                     </div>
                     <div class="form-group">
                        <label>MAC của thiết bị</label>
                        <input class="form-control" type="text" name="macaddress" value="{{ $macaddress}} " />
                        @if($errors->has('macaddress'))
                        <b><font color="red">{{$errors->first('macaddress')}}!</font></b>
                        @endif
                        <p class="help-block"><i style="color:red"></i></p>
                     </div>
                     <input type="submit" name="submit" value="Thêm" class="btn btn-info" />
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop

