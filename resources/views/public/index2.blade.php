@extends('templates.public.master')
@section('content')
  <div>
    <table style="border:none;margin-top: 25px;margin-left: 35px;background-color: #dde4f9;
">
      @php
          $temp = Session::get('account')['numberplant'];
          for($i=1;$i<= $temp;$i++ ){
          @endphp
             <td>
                <img src="{{url('file/humidity.png')}}" style ="width: 60px;height: 50px;" alt="" />
                {{-- <script>$("#hum").html(snapshot.child("/sensor/doam/doam1").val());</script> --}}
             Cây {{$i}} : <strong><span style="color:blue" id="hum{{$i}}">{{-- <script>document.write(number) --}}</script></span></strong> %
             </td>
          @php
          }
      @endphp
    </table>
  </div>
<div class="inbody2">
   <span style="font-size:20px;">Loại Cây Muốn Chọn: </span>
   <select name="loaicay" class="loaicay" id="loaicay" style= "width: 170px;margin-left: 30px;height: 30px;font-size: 15px;" class="form-control">
       <option value="0" selected="">Chọn Cây</option>
        @php
         foreach($result as $value){
        @endphp
          <option value="{{$value->ID_Bonsai}}">{{$value->Name_Bonsai}}</option>
        @php
         }
        @endphp
   </select>
   {{-- <button class="button" style="vertical-align:middle;margin-left: 19px;width:211px" onclick="runmode();"><span id="run" style="font-size: 15px"> Chạy </span> </button> --}}
    <label class="switch" style="margin-left:10px;top: -7px;" title="Chạy / tắt chế độ auto">
        <input type="checkbox" id="runmode" onclick="runmode()" >
        <span class="slider round"></span>
    </label>
</div>
<div>
    <a href="{{Route('home.index2')}}" style="margin-left:12%" class="btn btn-info" role="button">Tùy Chỉnh ở chế độ semi-auto</a>
</div>
<script type="text/javascript">
  $('#loaicay').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
   // alert(valueSelected);
    ajaxToggoAutoMode(valueSelected);
    // alert('đã upda te'+valueSelected);
  });
  function ajaxToggoAutoMode(idbonsai){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('ajax.updateplant') }}",
                type: 'GET',
                cache: false,
                data: {idbonsai:idbonsai},
                success: function(data){
                  // console.log(data['Nhiet_Do']);
                  // var nhietdo = data['Nhiet_Do'] ;
                  // var doam = data['Do_Am'];
                  // var anhsang = data['Anh_Sang'];
                  firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/autovalue/').update({
                    anhsang: data['Anh_Sang'] ,
                    nhietdo: data['Nhiet_Do'] ,
                    doam: data['Do_Am'] ,
                    dkanhsang: data['Condition_AS'].toString()
                  });
                },
                error: function (){
                    alert('Lỗi đã xảy ra');
                }
            });
            return false;
    }
</script>

@stop