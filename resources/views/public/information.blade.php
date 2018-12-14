
<!DOCTYPE html>
<html>
   <head>
      <title> Home </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
   <body>
     <div class="wrapper">
         <div class = "header">
            <table width="100%">
               <tr >
                  <td width="20%" >
                  <div style="width: 151px; margin-left: 10px;margin-top: 10px;border-radius: 5px;">
                   {{--  <img src="{{url('file/ava.jpg')}}" style="width:150px; height:100px;display:block;border-radius: 5px" alt="" />
                    <a href="{{route('user.profile')}}" <span style="display:block;font-size:15px;font-weight: bold"> Phan Cường</span></a>
                     <a href="{{Route('auth.logout')}}">Đăng Xuất</a> --}}
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
            <div class="container bootstrap snippet">
                <div class="row">
              		<div class="col-sm-10"><h1>User name</h1></div>
                </div>
                <div class="row">
              		<div class="col-sm-3"><!--left col-->
                    <div class="text-center">
                      <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                      <h6>Cập nhật một ảnh khác...</h6>
                      <input type="file" class="text-center center-block file-upload">
                    </div>
                    </hr><br>
                  </div>
                	<div class="col-sm-9">      
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                              <form class="form" action="##" method="post" id="registrationForm">
                                  <div class="form-group">  
                                      <div class="col-xs-6">
                                          <label for="first_name"><h4>Họ và Tên</h4></label>
                                          <input type="text" class="form-control" name="fullname"  placeholder="nhập tên đầy đủ">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      
                                      <div class="col-xs-6">
                                        <label for="last_name"><h4>Email</h4></label>
                                          <input type="text" class="form-control" name="email" placeholder="nhập địa chỉ email" >
                                      </div>
                                  </div>
                      
                                  <div class="form-group">
                                      
                                      <div class="col-xs-6">
                                          <label for="phone"><h4>Số lượng cây trồng</h4></label>
                                          <input type="text" class="form-control" name="numberplant"  placeholder="nhập số lượng cây mà bạn muốn quản lý">
                                      </div>
                                  </div>
                      
                                  <div class="form-group">
                                      <div class="col-xs-6">
                                         <label for="mobile"><h4>MAC của thiết bị</h4></label>
                                          <input type="text" class="form-control" name="mac"  placeholder="nhập địa chỉ mac">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                       <div class="col-xs-12">
                                            <br>
                                          	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Cập Nhật</button>
                                           	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Đổi Mật Khẩu</button>
                                        </div>
                                  </div>
                          	</form>
                      </div><!--/tab-content-->
                    </div>
                    </div><!--/col-9-->
            </div><!--/row-->
          </div>
    
<script type="text/javascript">
  $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
// Tao 2 mang chua ten ngay thang
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
 
// Tao moi doi tuong Date()
var newDate = new Date();
// Lay gia tri thoi gian hien tai
newDate.setDate(newDate.getDate());
// Xuat ngay thang, nam
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());
 
setInterval( function() {
    // lay gia tri giay trong doi tuong Date()
    var seconds = new Date().getSeconds();
    // Chen so 0 vao dang truoc gia tri giay
    $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
    },1000);
 
setInterval( function() {
    // Tuong tu lay gia tri phut
    var minutes = new Date().getMinutes();
    // Chen so 0 vao dang truoc gia tri phut neu gia tri hien tai nho hon 10
    $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
 
setInterval( function() {
    // Lay gia tri gio hien tai
    var hours = new Date().getHours();
    // Chen so 0 vao truoc gia tri gio neu gia tri nho hon 10
    $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
});
</script>
   <style>
   .btn-info {
    color: black;
    background-color: white;
    border-color: black;
   }
   .loaicay {
      border-radius: 5px;
   }
   .header table {
      width:100%;
   }
   .header td {
      text-align: center;
   }
    .header td h1 {
         font-family: cursive;
         font-size: 50px;
         color: green;
   }
   .inbody {
      border-radius: 40px;
      border:1px solid black ;
      width: 75%;
      margin: 0 auto;
   }
   .inbody table {
      border:1px solid black ;
      height: 50%;
     
   }
   
   .info {
      text-align: center;
      margin-top:20px;
      margin: 0 auto;
      width:90%;
       border-collapse: collapse;
    border-radius: 30px;
    border-style: hidden; /* hide standard table (collapsed) border */
    box-shadow: 0 0 0 1px #666;
    overflow: hidden
   }
   .info td{
      padding-top: 30px;
      padding-bottom: 30px;
   }
   .info img {
      margin: 0 auto;
      display: block;
      width: 70px;
      height: 55px;
   }
   .inbody2 {
          padding: 8% 12% 0%;
   }
   .button {
     display: inline-block;
     border-radius: 4px;
     background-color: #f4511e;
     border: none;
     color: #FFFFFF;
     text-align: center;
     font-size: 20px;
     padding: 5px;
     width: 150px;
     transition: all 0.5s;
     cursor: pointer;
     margin: 5px;
}
 .button2 {
     display: inline-block;
     border-radius: 4px;
     background-color: #f4511e;
     border: none;
     color: #FFFFFF;
     text-align: center;
     font-size: 15px;
     padding: 5px;
     width: 100px;
     transition: all 0.5s;
     cursor: pointer;
     margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
/*đồng hồ*/
.clock {
    width: 300px;.clock 
    margin: 0 auto;
    padding: 5px;
    color: black;
}
 
.clock ul {
    width: 100%;
    margin: 0 auto;
    padding: 0px;
    list-style: none;
    text-align: center;
}
 
.clock ul li {
    display: inline;
    font-weight: bold;
    font-size: 15px;
    text-align: center;
    font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
    text-shadow: 0 0 5px #fff;
}
 
#point {
    position: relative;
    font-weight: bold;
    -moz-animation: mymove 1s ease infinite;
    -webkit-animation: mymove 1s ease infinite;
    padding-left: 10px;
    padding-right: 10px;
}
@-webkit-keyframes mymove {
    0% {opacity: 1.0;
    text-shadow: 0 0 20px #fff;
}
 
50% {
    opacity: 0;
    text-shadow: none;
}
 
100% {
    opacity: 1.0;
    text-shadow: 0 0 20px #00c6ff;
}
}
 
@-moz-keyframes mymove {
    0% {
        opacity: 1.0;
        text-shadow: 0 0 20px #00c6ff;
    }
 
    50% {
        opacity: 0;
        text-shadow: none;
    }
 
    100% {
        opacity: 1.0;
        text-shadow: 0 0 20px #00c6ff;
    };
}
/*logout button*/
@import url(https://fonts.googleapis.com/css?family=Oswald:400);

.logout {
  font-size: .8em;
  font-family: 'Oswald', sans-serif;
  position: relative;
  right: -18px;
  bottom: -4px;
  overflow: hidden;
  letter-spacing: 3px;
  opacity: 0;
  transition: opacity .45s;
  -webkit-transition: opacity .35s;
  
}

.button3 {
  text-decoration: none;
  float: right;
  padding: 12px;
  margin: 15px;
  color: white;
  width: 25px;
  background-color: black;
  transition: width .35s;
  -webkit-transition: width .35s;
  overflow: hidden
}

 a:hover {
  width: 100px;
}

a:hover .logout{
  opacity: .9;
}

.logout a {
  text-decoration: none;
}


   </style>