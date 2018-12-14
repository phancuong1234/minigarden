@extends('templates.admin.master')
@section('content')
<div class="content- wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
               <div class="col-md-12"> 
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Danh sách người dùng </h4>
                            @if (Session::has('msg'))
                                <script> alert('{{ Session::get('msg') }}')</script>
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
                            <form action="{{-- {{Route('aadmin.user.search')}} --}}" method="post" role="search">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <input type="text" name="madonvi" class="form-control border-input" value="{{-- {{$madv}} --}}"  placeholder="ID">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="tendonvi" class="form-control border-input" placeholder="Tên Đơn Vị    " value="{{-- {{$tendonvi}} --}}">
                                        </div>
                                    </div>                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="submit" name="search" value="Tìm kiếm" class="is" />
                                        </div>
                                    </div>
                                </div>
                                </form>
                                    <a href="{{Route('admin.user.add')}}" class="addtop"><img src="{{url('admin/assets/img/add.png')}}" style="width:40px;height: 40px" alt="" /> Thêm</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive ">
                            <form action="" method="post" id="frm">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="15%">Username</th>
                                            <th width="15%">Tên đầy đủ</th>
                                            <th width="15%">Email</th>
                                            <th width="15%">Số lượng cây</th>      
                                            <th width="20%">Địa chỉ mac của thiết bị</th>                                         
                                            <th width="20%">Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($danhsach as $ds)
                                        <tr class="odd gradeX">
                                                <td>{{$ds->Username}}</td>
                                                <td>{{$ds->Fullname}}</td>
                                                <td>{{$ds->Email}}</td>
                                                <td>{{$ds->Number_Bonsai}}</td>
                                                <td>{{$ds->MacAddress}}</td>
                                                <td align="center">
                                                    <a href="{{Route('admin.user.edit',['id' =>$ds->MacAddress])}}" class="btn btn-primary">Sửa</a>
                                                    <a href="{{Route('admin.user.delete',['id' => $ds->MacAddress])}}" class="btn btn-danger">Xóa</a>
                                                </td>       
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                                <div align="center">
                                <ul>
                                       {{$danhsach->links()}}
                                </ul>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var them = "{{session()->has('themuser')}}";
    var sua = "{{session()->has('suauser')}}" ;
    var xoa = "{{session()->has('xoauser')}}" ;
    if(them == 1){
        themuser();
    }
    if(sua == 1 ){
        suauser();
    }
     if(xoa == 1 ){
        xoauser();
    }
  function themuser(){
     firebase.database().ref('id/{{session()->get('themuser')['macaddress']}}').set({
        autovalue :{
            anhsang: "0",
            doam: "0",
            nhietdo: "0"
        },
        devices :{
            den: "0",
            maybom: "0",
            quat: "0",
            rem: "0",
        },
        mode :{
            automode: "1"
        },
        sensor: {
            anhsang: "0",
            doam: {
                doam1: "0"
            },
            nhietdo: "0"
        },
        soluongcay: {
            soluong : "{{session()->get('themuser')['numberplant']}}"
        }
        ,
        vitri: {
            cay: "1"
        }
  });
  }
  function suauser(){
      firebase.database().ref('id/{{session()->get('suauser')['macaddress']}}/soluongcay/').update({soluong:"{{session()->get('suauser')['numberplant']}}"});
  }
  function xoauser(){
     firebase.database().ref('id/').child('{{session()->get('xoauser')}}').remove();
  }
</script>
@stop