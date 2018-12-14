@extends('templates.admin.master')
@section('content')
<div class="content-wrapper">
   <div class="container">
      <div class="row pad-botm">
         <div class="col-md-12">
            <h4 class="header-line">Thêm Mã Bản Quyền</h4>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-info">
               <div class="panel-heading">
                  Thông Tin Mã Bản Quyền
               </div>
             
               <div class="panel-body">
                  <form action="{{route("admin.key.add")}}" method="post" class="form">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label>Mã Bản Quyền</label>
                        <input class="form-control" style="border: 1px solid #848484;" type="text" name="license" value="" />
                        @if($errors->has('license'))
                        <b><font color="red">{{$errors->first('license')}}!</font></b>
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

