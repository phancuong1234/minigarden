@extends('templates.public.master')
@section('content')
 <div>
<script type="text/javascript">
function batden() {
    var checkBox = document.getElementById("turnlight");
    if (checkBox.checked == true){
        firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({den:"1"});
    } else {
       firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({den:"0"});
    }
}
function tuoinuoc() {
    var checkBox = document.getElementById("turnpump");
    if (checkBox.checked == true){
        firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({maybom:"1"});
    } else {
       firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({maybom:"0"});
    }
}
function keorem() {
    var checkBox = document.getElementById("turnR");
    if (checkBox.checked == true){
        firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({rem:"1"});
    } else {
       firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({rem:"0"});
    }
}
function batquat() {
    var checkBox = document.getElementById("turnfan");
    if (checkBox.checked == true){
        firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({quat:"1"});
    } else {
       firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({quat:"0"});
    }
}
//    $("#turnlight").onclick(function() {
//     if(this.checked) {
//          firebase.database().ref('id/2C:3A:E8:4A:70:09/devices').update({den:1});
//     }
// });
</script>
                              <table class="info2" style="border:none;">
                                 <tr>
                                    <td>
                                       <ul>
                                          <li> Tưới Nước : 
                                            <select name="loaicay" class="loaicay" style= "width: 90px;height: 30px;font-size: 15px;" class="form-control">
                                               <option value="" selected="">Bơm 1</option>
                                               <option value="">Bơm 1</option>
                                               <option value="">Bơm 1</option>
                                            </select>
                                             <label class="switch" style="margin-left:10px;top: -7px;">
                                               <input type="checkbox" id="turnpump" onclick="tuoinuoc()" >
                                               <span class="slider round"></span>
                                             </label>
                                          </li>
                                          <li> bật Đèn   :  
                                             <label class="switch"  style="margin-left:90px;">
                                               <input type="checkbox" id="turnlight" onclick="batden()" >
                                               <span class="slider round"></span>
                                             </label>  
                                          </li>
                                          <li> Kéo Rèm   :     
                                             <label class="switch"  style="margin-left:80px;">
                                               <input type="checkbox" id="turnR" onclick="keorem()"  >
                                               <span class="slider round"></span>
                                             </label>
                                          </li>
                                          <li> Bật Quạt  :     
                                             <label class="switch"  style="margin-left:80px;">
                                               <input type="checkbox" id="turnfan" onclick="batquat()" >
                                               <span class="slider round"></span>
                                             </label>
                                          </li>
                                       </ul>   
                                    </td>
                                    <td style="vertical-align:top;">
                                       <ul>
                                          <li > Hẹn giờ tưới nước : </li>
                                          <li> Hẹn giờ bật Đèn :</li>
                                       </ul>   
                                    </td>                 
                                 </tr>
                              </table>
                              <div>
                                  <a href="{{Route('home.index')}}" style="width: 116px;margin-left: 85%;" class="btn btn-info" role="button" >Trở Về </a>
                              </div>
                           </div>
                           <style>
                           .info2 {
                              margin-left: 13%;
                              margin-top: 4%;
                              border: none;
                              width: 75%;
                           }
                           .info2 ul li  {
                              list-style-type: none;
                              font-size:15px;
                              font-weight: bold;
                              font-family: Arial;
                              padding-bottom: 10px;
                           }
                           .switch {
                              margin-left: 40px;
                             position: relative;
                             display: inline-block;
                             width: 60px;
                             height: 34px;
                           }

                           .switch input { 
                             opacity: 0;
                             width: 0;
                             height: 0;
                           }

                           .slider {
                             position: absolute;
                             cursor: pointer;
                             top: 0;
                             left: 0;
                             right: 0;
                             bottom: 0;
                             background-color: #ccc;
                             -webkit-transition: .4s;
                             transition: .4s;
                           }

                           .slider:before {
                             position: absolute;
                             content: "";
                             height: 26px;
                             width: 26px;
                             left: 4px;
                             bottom: 4px;
                             background-color: white;
                             -webkit-transition: .4s;
                             transition: .4s;
                           }

                           input:checked + .slider {
                             background-color: #2196F3;
                           }

                           input:focus + .slider {
                             box-shadow: 0 0 1px #2196F3;
                           }

                           input:checked + .slider:before {
                             -webkit-transform: translateX(26px);
                             -ms-transform: translateX(26px);
                             transform: translateX(26px);
                           }

                           /* Rounded sliders */
                           .slider.round {
                             border-radius: 34px;
                           }

                           .slider.round:before {
                             border-radius: 50%;
                           }
                           </style>
@stop
