
<!DOCTYPE html>
<html>
   <head>
      <title> Home </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{csrf_token()}}">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.8/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCsw57hA-mjdJWo7oyxL-ZKDZecmGem2Rc",
    authDomain: "minigardensystem.firebaseapp.com",
    databaseURL: "https://minigardensystem.firebaseio.com",
    projectId: "minigardensystem",
    storageBucket: "minigardensystem.appspot.com",
    messagingSenderId: "803201866160"
  };
  firebase.initializeApp(config);
  var starCountRef = firebase.database().ref('id/{{session()->get('account')['MacAddress']}}');
    starCountRef.on('value', function(snapshot) {
      $(document).ready(function(){  
            var i;
            var num={{session()->get('account')['numberplant']}};
            for(i=1;i<= num;i++){
              $("#hum"+i).html(snapshot.child("/sensor/doam/doam"+i).val());
            }
            $("#sun").html(snapshot.child("/sensor/anhsang").val());
            $("#tem").html(snapshot.child("/sensor/nhietdo").val());
            // $("#hum").html(snapshot.child("/sensor/doam/doam1").val());
            var light = snapshot.child("/devices/den").val();
            var fan = snapshot.child("/devices/quat").val();
            var pump = snapshot.child("/devices/maybom").val();
            var tmp = snapshot.child("/mode/automode").val();
            if(light == "1"){
              $("#den").html("Đang Bật");
              // $('#lightbutton').removeClass('slider round').addClass('slider');
              $('#turnlight').prop('checked', true);
            }
            else {
              $("#den").html("Đang Tắt");
              $('#turnlight').prop('checked', false);
            }
            if(fan == "1"){
              $("#quat").html("Đang Bật");
              $('#turnfan').prop('checked', true);
            }
            else {
              $("#quat").html("Đang Tắt");
              $('#turnfan').prop('checked', false);
            }
            if(pump == "1"){
               $("#maybom").html("Đang Bật");
            }
            else {
              $("#maybom").html("Đang Tắt");
            }
            if(tmp == "1" ){
              $('#runmode').prop('checked', false);
            }
            else {
              $('#runmode').prop('checked', true);
            }
       });
});
  $(document).ready(function(){
      var dem = 0;
      var dem2 = 0;
      var oldVar = 0; 
      var oldLight = 0;
      setInterval(function(){
      var myVar = document.getElementById("tem").innerHTML; 
      var myLight= document.getElementById("sun").innerHTML; 
        checkForChanges(myVar,oldVar);
        checkForChanges2(myLight,oldLight); // after every 2 secs check
        oldVar = myVar;
        oldLight = myLight;
        if(dem >= 20){
          //alert(dem);
          $('#warning').removeClass('warning').addClass('warning2');
        }
        else {
          $('#warning').removeClass('warning2').addClass('warning');
        } // reset the old value now to the new one, so during next check we should have our myVar changed.
         if(dem2 >=20){
          //alert(dem);
          $('#warning2').removeClass('warning').addClass('warning2');
        }
        else {
          $('#warning2').removeClass('warning2').addClass('warning');
        } // reset the old value now to the new one, so during next check we should have our myVar changed.
      },2000);
      function checkForChanges(myVar,oldVar){
        if(oldVar != myVar)
        {
          return dem=0;
        }
        else
        {
          return dem++;
        }
      }
      function checkForChanges2(myVar,oldVar){
        if(oldVar != myVar)
        {
          return dem2=0;
        }
        else
        {
          return dem2++;
        }
      }
  });
function runmode(){
  var checkmode = document.getElementById("runmode");
    if(checkmode.checked == true){
      firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/mode/').update({automode:"0"});
    }
    else{
       firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/mode/').update({automode:"1"});
    }
}
function batden() {
    var checkBox = document.getElementById("turnlight");
    if (checkBox.checked == true){
        firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({den:"1"});
    } else {
       firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({den:"0"});
    }
}
function tuoinuoc() {
    var checkBox = document.getElementById("turnpump");
    if (checkBox.checked == true){
        firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({maybom:"1"});
    } else {
       firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({maybom:"0"});
    }
}
function keorem() {
    var checkBox = document.getElementById("turnR");
    if (checkBox.checked == true){
        firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({rem:"1"});
    } else {
       firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({rem:"0"});
    }
}
function batquat() {
    var checkBox = document.getElementById("turnfan");
    if (checkBox.checked == true){
        firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({quat:"1"});
    } else {
       firebase.database().ref('id/{{session()->get('account')['MacAddress']}}/devices').update({quat:"0"});
    }
}
</script>
 </head>
   <body>
     <div class="wrapper">
         <div class = "header">
            <table width="100%">
               <tr >
                  <td width="20%" >
                  <div style="width: 151px; margin-left: 10px;margin-top: 10px;border-radius: 5px;">
                    <img src="{{url('file/ava.jpg')}}" style="width:150px; height:100px;display:block;border-radius: 5px" alt="" />
                    <a href="{{route('user.profile')}}" <span style="display:block;font-size:15px;font-weight: bold"> Phan Cường</span></a>
                     <a href="{{Route('auth.logout')}}">Đăng Xuất</a>
                  </div>
                    {{-- <a class="button3" href="">
                    <div class="logout">LOGOUT</div>
                    </a> --}}
                  </td>
                  <td width="70%" >
                     <a href="{{route('home.index')}}" style="text-decoration: none"><h1>Mini Garden System</h1></a>
                     <span style="font-weight: bold;" id="Date"></span>
                  </td>
                  <td width="10%">
                  <img src="{{url('file/watch.png')}}" alt="" style="margin-left: 54%;padding-top: 5px;width: 91px;height: 80px;display:block;"/>
                  <div class="clock">
                    <ul style="margin-left: 45%;border: 1px solid #00c6ff;width: 145px; border-radius: 10px;">
                        <li id="hours"></li>
                        <li id="point">:</li>
                        <li id="min"></li>
                        <li id="point">:</li>
                        <li id="sec"></li>
                    </ul>
                  </div>
                  </td>
               </tr>
            </table>
         </div>
         <div class= "body">
               <div class = "inbody">
                    <div style="padding-top: 23px;    padding-bottom: 23px;">
                           <table class="info" >
                              <tr>
                                 <td width="15%" style=" position: relative;">
                                 <img src="{{url('file/sunny.png')}}"  alt="" />
                                 <img src="{{url('file/warning.png')}}"  alt="" id="warning2" class = "warning" style="position: absolute !important;"/>
                                 Ánh Sáng : <strong><span style="color:blue"  id="sun" ></span></strong> %
                                 </td>
                                 <td width="15%" style=" position: relative;">
                                 <img src="{{url('file/tem.png')}}"  alt="" />
                                 <img src="{{url('file/warning.png')}}"  alt="" id="warning" class = "warning" style="position: absolute !important;"/>
                                 Nhiệt Độ : <strong><span style="color:blue"  id="tem"></span></strong> °C
                                 </td>
                                   <td width="15%">
                                    <img src="{{url('file/idea.png')}}"  alt="" />
                                 Đèn : <strong><span style="color:blue" id="den"></span></strong>
                                 </td>
                                  <td width="15%">
                                   <img src="{{url('file/fan.png')}}"  alt="" />
                                 Quạt : <strong><span style="color:blue" id="quat"></span></strong>
                                 </td>
                                 <td width="21%">
                                   <img src="{{url('file/pump.png')}}"  alt="" />
                                 Máy Bơm : <strong><span style="color:blue" id="maybom"></span></strong>
                                 </td>
                              </tr>
                           </table>
                           <div>
                          {{-- @extends('auth.login')
                          @if($errors->has('username') || $errors->has('password') || Session::has('msg')  || Session::has('account') == false)
                          <script>
                           
                              $(document).ready(function(){
                              // Show the Modal on load
                              $('#myModal').modal('show')
                              
                              // Hide the Modal
                              // $("#myBtn").click(function(){
                              //     $("#myModal").modal("hide");
                              // });
                          });
                          </script>
                          @endif --}}