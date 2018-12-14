@extends('templates.admin.master')
@section('content')
<div class="content- wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
               <div class="col-md-12"> 
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Quản Lý Mã </h4>
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
                                            <input type="text" name="id" class="form-control border-input" value=""  placeholder="ID">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="nameplant" class="form-control border-input" placeholder="Tên Cây Trồng" value="{{-- {{$tendonvi}} --}}">
                                        </div>
                                    </div>                                    
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="submit" name="search" value="Tìm kiếm" class="is" />
                                        </div>
                                    </div>
                                </div>
                                </form>
                                    <a href="{{Route('admin.key.add')}}" class="addtop"><img src="{{url('admin/assets/img/add.png')}}" style="width:40px;height: 40px" alt="" /> Thêm</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive ">
                            <form action="" method="post" id="frm">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20%">ID</th>
                                            <th width="20%">Mã Key</th>
                                            <th width="20%">Tình Trạng</th>
                                            <th width="20%">Chức Năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($danhsach as $ds)
                                        <tr class="odd gradeX">
                                                <td>{{$ds->ID_key}}</td>
                                                <td>{{$ds->License_Key}}</td>
                                                <td>{{$ds->status}}</td>
                                                <td align="center">
                                                    <a href="{{Route('admin.key.edit',['id' =>$ds->ID_key])}}" class="btn btn-primary">Sửa</a>
                                                    <a href="{{Route('admin.key.delete',['id' => $ds->ID_key])}}" class="btn btn-danger">Xóa</a>
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

@stop