@extends('templates.admin.master')
@section('content')
<div class="content-wrapper">
         <div class="container">
	        <div class="row pad-botm">
	            <div class="col-md-12">
	                <h4 class="header-line">Sửa Thông Tin Mã Bản Quyền </h4>
	            </div>
	        </div>
            	<div class="row">
                	<div class="col-md-12 col-sm-12 col-xs-12">
	               		<div class="panel panel-info">
	                       		<div class="panel-heading">
	                        	 Thông Tin Mã Bản Quyền
	                       		</div>
	                       		@if (Session::has('error'))
						<p>{{ Session::get('error') }}</p>
					@endif				
		                        <div class="panel-body">
		                        @php
		                        	$id = $danhsach->ID_key;
		                        @endphp
		                           	<form role="form" action="{{Route('admin.key.edit',['id' => $id])}}" enctype="multipart/form-data" method="post" class="form">
		                           	{{ csrf_field() }}
		                                        <div class="form-group">
		                                            <label>ID</label>
		                                            <input class="form-control" type="text" name="id" readonly="true" value="{{$danhsach->ID_key}}" />
		                                            @if($errors->has('id'))
					                        <b><font color="red">{{$errors->first('id')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Mã Bản Quyền</label>
		                                            <input class="form-control" type="text" name="license" value="{{$danhsach->License_Key}}" />
		                                            @if($errors->has('license'))
					                        <b><font color="red">{{$errors->first('license')}}!</font></b>
					                    @endif
		                                            <p class="help-block"><i style="color:red"></i></p>
		                                        </div>
		                                        <div class="form-group">
		                                            <label>Trình Trạng</label>
		                                            <input class="form-control" type="text" name="status" value="{{$danhsach->status}}" />
		                                            @if($errors->has('status'))
					                        <b><font color="red">{{$errors->first('status')}}!</font></b>
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