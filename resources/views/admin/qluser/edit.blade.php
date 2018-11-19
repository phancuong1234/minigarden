@extends('templates.admin.master')
@section('content')
<div class="content-wrapper">
         <div class="container">
	        <div class="row pad-botm">
	            <div class="col-md-12">
	                <h4 class="header-line">Sửa Nhân Sự</h4>
	            </div>
	        </div>
            	<div class="row">
                	<div class="col-md-12 col-sm-12 col-xs-12">
	               		<div class="panel panel-info">
	                       		<div class="panel-heading">
	                        	 Thông tin người dùng
	                       		</div>
	                       		@if (Session::has('error'))
						<p>{{ Session::get('error') }}</p>
					@endif
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
		                        <div class="panel-body">
		                        @php
		                        	$id = $danhsach->ID_User;
		                        @endphp
		                           	<form role="form" action="{{Route('admin.user.edit',['id' => $id])}}" enctype="multipart/form-data" method="post" class="form">
		                           	{{ csrf_field() }}
		                                        <div class="form-group">
		                                            <label>Tên Tài Khoản</label>
		                                            <input class="form-control" type="text" name="username" readonly value="{{$danhsach->Username}}" />
		                                            @if($errors->has('username'))
					                        <b><font color="red">{{$errors->first('username')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Mật Khẩu</label>
		                                            <input class="form-control" type="password" name="password" value="{{$danhsach->Password}}" />
		                                            @if($errors->has('password'))
					                        <b><font color="red">{{$errors->first('password')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Tên Đầy Đủ</label>
		                                            <input class="form-control" type="text" name="fullname" value="{{$danhsach->Fullname}}" />
		                                            @if($errors->has('fullname'))
					                        <b><font color="red">{{$errors->first('fullname')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Email</label>
		                                            <input class="form-control" type="text" name="email"  value="{{$danhsach->Email}}" />
		                                            @if($errors->has('email'))
					                        <b><font color="red">{{$errors->first('email')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>MAC của thiết bị</label>
		                                            <input class="form-control" type="text" name="macaddress" value="{{$danhsach->MacAddress}}" />
		                                            @if($errors->has('macaddress'))
					                        <b><font color="red">{{$errors->first('macaddress')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <input type="submit" name="submit" value="Lưu" class="btn btn-info" />
		                                </form>
		                        </div>
	                	</div>
                   	</div>
            	</div> 
    	</div>
</div>
@stop