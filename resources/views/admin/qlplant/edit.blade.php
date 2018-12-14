@extends('templates.admin.master')
@section('content')
<div class="content-wrapper">
         <div class="container">
	        <div class="row pad-botm">
	            <div class="col-md-12">
	                <h4 class="header-line">Sửa Cây Trồng</h4>
	            </div>
	        </div>
            	<div class="row">
                	<div class="col-md-12 col-sm-12 col-xs-12">
	               		<div class="panel panel-info">
	                       		<div class="panel-heading">
	                        	 Thông tin cây trồng
	                       		</div>
	                       		@if (Session::has('error'))
						<p>{{ Session::get('error') }}</p>
					@endif
		                        <div class="panel-body">
		                        @php
		                        	$id = $danhsach->ID_Bonsai;
		                        @endphp
		                           	<form role="form" action="{{Route('admin.plant.edit',['id' => $id])}}" enctype="multipart/form-data" method="post" class="form">
		                           	{{ csrf_field() }}
		                                        <div class="form-group">
		                                            <label>Tên Cây Trồng</label>
		                                            <input class="form-control" type="text" name="name"  value="{{$danhsach->Name_Bonsai}}" />
		                                            @if($errors->has('name'))
					                        <b><font color="red">{{$errors->first('name')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Nhiệt Độ</label>
		                                            <input class="form-control" type="text" name="temp" value="{{$danhsach->Nhiet_Do}}" />
		                                            @if($errors->has('temp'))
					                        <b><font color="red">{{$errors->first('temp')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Độ Ẩm</label>
		                                            <input class="form-control" type="text" name="humadity" value="{{$danhsach->Do_Am}}" />
		                                            @if($errors->has('humadity'))
					                        <b><font color="red">{{$errors->first('humadity')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Ánh Sáng</label>
		                                            <input class="form-control" type="text" name="light"  value="{{$danhsach->Anh_Sang}}" />
		                                            @if($errors->has('light'))
					                        <b><font color="red">{{$errors->first('light')}}!</font></b>
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