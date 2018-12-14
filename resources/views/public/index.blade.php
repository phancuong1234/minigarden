@extends('templates.public.master')
@section('content')
 <div>
                              <table class="info2" style="border:none;background-color: #dde4f9;">
                                 <tr>
                                    <td>
                                       <ul>
                                          <li> Tưới Nước : 
                                              <select name="vitricay" class="vitricay" id="vitricay" style= "width: 170px;margin-left: 30px;height: 30px;font-size: 15px;" class="form-control">
                                                 <option value="0" selected="">Chọn Cây</option>
                                                  @php
                                                    $temp = Session::get('account')['numberplant'];
                                                    for($i=1;$i<= $temp;$i++ ){
                                                  @endphp
                                                    <option value="{{$i}}">Cây {{$i}}</option>
                                                  @php
                                                   }
                                                  @endphp
                                             </select>
                                             <label class="switch" style="margin-left:10px;top: -7px;">
                                               <input type="checkbox" id="turnpump" onclick="tuoinuoc()" >
                                               <span class="slider round"></span>
                                             </label>
                                          </li>
                                          <li> bật Đèn   :  
                                             <label class="switch"  style="margin-left:128px;">
                                               <input type="checkbox" id="turnlight" onclick="batden()" >
                                               <span class="slider round" id="lightbutton"></span>
                                             </label>  
                                          </li>
                                         {{--  <li> Kéo Rèm   :     
                                             <label class="switch"  style="margin-left:80px;">
                                               <input type="checkbox" id="turnR" onclick="keorem()"  >
                                               <span class="slider round"></span>
                                             </label>
                                          </li> --}}
                                          <li> Bật Quạt  :     
                                             <label class="switch"  style="margin-left:118px;">
                                               <input type="checkbox" id="turnfan" onclick="batquat()" >
                                               <span class="slider round"></span>
                                             </label>
                                          </li>
                                       </ul>   
                                    </td>
                                    {{-- <td style="vertical-align:top;">
                                       <ul>
                                          <li > Hẹn giờ tưới nước : </li>
                                          <li> Hẹn giờ bật Đèn :</li>
                                       </ul>   
                                    </td>  --}}                
                                 </tr>
                              </table>
                              <div>
                                  <a href="{{Route('home.index')}}" style="width: 116px;margin-left: 85%;" class="btn btn-info" role="button" >Trở Về </a>
                              </div>
                           </div>
                           <script type="text/javascript">
                            $('#vitricay').on('change', function (e) {
                            var optionSelected = $("option:selected", this);
                            var valueSelected = this.value;
                             firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/vitri/').update({cay: valueSelected});
                            // alert('đã upda te'+valueSelected);
                            });
                           </script>
               
@stop
