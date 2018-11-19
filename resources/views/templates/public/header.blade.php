
<!DOCTYPE html>
<html>
   <head>
      <title> Home </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
  var starCountRef = firebase.database().ref('id/2C:3A:E8:4A:70:09');

    starCountRef.on('value', function(snapshot) {
      $(document).ready(function(){  
            $("#sun").html(snapshot.child("/sensor/anhsang").val());
            $("#tem").html(snapshot.child("/sensor/nhietdo").val());
            $("#hum").html(snapshot.child("/sensor/doam/doam1").val());
            var light = snapshot.child("/devices/den").val();
            var fan = snapshot.child("/devices/quat").val();
            var pump = snapshot.child("/devices/maybom").val();
            if(light == "1"){
               $("#den").html("Đang Bật");
            }
            else {
              $("#den").html("Đang Tắt");
            }
            if(fan == "1"){
               $("#quat").html("Đang Bật");
            }
            else {
              $("#quat").html("Đang Tắt");
            }
            if(pump == "1"){
               $("#maybom").html("Đang Bật");
            }
            else {
              $("#maybom").html("Đang Tắt");
            }
       });
});
  // var turn = firebase.database().ref('id/2C:3A:E8:4A:70:09/devices/den');
  // //var  turn = firebase.database().ref('id/2C:3A:E8:4A:70:09/devices/den');
  // // turn.on('value', function(snapshot) {
  // //     $(document).ready(function(){  
  // //           var light = snapshot.val();
  // //           if( light==1){
  // //             $("#turnpump").prop( "checked", true );
  // //           }
  // //     });
  // // });
  // turn.on('value', function(snapshot) {
  //     $(document).ready(function(){  
  //         var temp = snapshot.val();
  //         if(temp == 1){
  //            $("#den").html("Đang Bật");
  //         }else{
  //           $("#den").html(snapshot.val());
  //         }
  // });
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
                    <span style="display:block;font-size:15px;font-weight: bold"> Phan Cường</span>
                     <a href="{{Route('auth.logout')}}">Logout</a>
                  </div>
                    {{-- <a class="button3" href="">
                    <div class="logout">LOGOUT</div>
                    </a> --}}
                  </td>
                  <td width="70%" >
                     <h1>Mini Garden System</h1>
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
                    <div style="    padding-top: 23px;    padding-bottom: 23px;">
                           <table class="info" >
                              <tr>
                                 <td width="15%">
                                 <img src="{{url('file/sun-icon.jpg')}}"  alt="" />
                                 Ánh Sáng : <strong><span style="color:blue"  id="sun"></span></strong> °C
                                 </td>
                                 <td width="15%">
                                 <img src="{{url('file/tem.jpg')}}"  alt="" />
                                 Nhiệt Độ : <strong><span style="color:blue"  id="tem"></span></strong> °C
                                 </td>
                                   <td width="15%">
                                    <img src="{{url('file/humidity.png')}}"  alt="" />
                                 Độ Ẩm : <strong><span style="color:blue" id="hum"></span></strong> %
                                 </td>
                                   <td width="15%">
                                    <img src="{{url('file/bulb-512.png')}}"  alt="" />
                                 Đèn : <strong><span style="color:blue" id="den"></span></strong>
                                 </td>
                                  <td width="15%">
                                   <img src="{{url('file/Fan-icon.png')}}"  alt="" />
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