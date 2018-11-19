 </div>
                      <div>
               </div>
         </div>
     </div>
   </body>
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
</html>