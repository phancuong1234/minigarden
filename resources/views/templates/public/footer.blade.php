 </div>
                      <div>
               </div>
         </div>
     </div>
     <footer class="footer" style="margin: 1% auto;width: 89%;border-top: 1px solid green">
        <p style="    width: 45%;margin: 10px auto;font-size: 14px; font-family: -webkit-pictograph;"> Mọi thắc mắc về vấn đề kĩ thuật hay phần mềm xin vui lòng liên hệ theo HOTLINE: <strong style="color: red;">12312334</strong></br > hoặc truy cập Fanpage <a href="https://www.facebook.com/marine.thai.1"> MiniGarden Systemm</a> để biết thêm chi tiết .</p>
      </footer>
   </body>
   <script type="text/javascript">
$(document).ready(function() {
// Tao 2 mang chua ten ngay thang
var monthNames = [ "tháng 1", "tháng 2", "tháng 3", "tháng 4", "tháng 5", "tháng 6", "tháng 7", "tháng 8", "tháng 9", "tháng 10", "tháng 11", "tháng 12" ];
var dayNames= ["chủ nhật","thứ 2","thứ 3","thú 4","Thứ 5","thứ 6","thứ 7"]
 
// Tao moi doi tuong Date()
var newDate = new Date();
// Lay gia tri thoi gian hien tai
newDate.setDate(newDate.getDate());
// Xuat ngay thang, nam
$('#Date').html(dayNames[newDate.getDay()] + " ngày " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' năm ' + newDate.getFullYear());
 
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
      border: 5px solid #689c68;
      width: 75%;
      margin: 0 auto;
      background-color: #dde4f9;  
   }
   .inbody table {
      border:1px solid black ;
      height: 50%;
     background-color: #ddf9d1;
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
      width: 60px;
      height: 50px;
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
  width: 250px;
}
/* a:hover {
  width: 100px;
*/}
a:hover .logout{
  opacity: .9;
}

.logout a {
  text-decoration: none;
}


   </style>
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
.warning {
    width: 22px !important;
    height: 25px !important;
    position: absolute !important;
    top: 20%;
    left: 70%;
    visibility: hidden;
}
.warning2 {
    width: 22px !important;
    height: 25px !important;
    position: absolute !important;
    top: 20%;
    left: 70%;
    animation: mymove 2s infinite;
    @keyframes mymove {
    from {visibility: hidden;}
    to {visibility: visible;}
}
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
 background-color: #667eab/*#2196F3*/;
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
</html>