@extends('templates.public.master')
@section('content')
 <div class="inbody2">
                                 <span style="font-size:20px;">Loại Cây Muốn Chọn: </span>
                                 <select name="loaicay" class="loaicay" style= "width: 170px;margin-left: 30px;height: 30px;font-size: 15px;" class="form-control">
                                     <option value="" selected="">Cây Cúc</option>
                                     <option value="">Cây Cúc 2</option>
                                     <option value="">Cây Cúc 3</option>
                                 </select>
                                 <button class="button" style="vertical-align:middle;margin-left: 19px;"><span> Chạy </span> </button>
                              </div>
                              <div>
                                  <a href="{{Route('home.index2')}}" style="margin-left:12%" class="btn btn-info" role="button">Tùy Chỉnh ở chế độ semi-auto</a>
                              </div>
@stop