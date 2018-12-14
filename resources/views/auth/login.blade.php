<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Cuong">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="template/login/css/font-face.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="template/login/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- template/login CSS-->
    <link href="template/login/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="template/login/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- Main CSS-->
    <link href="template/login/css/theme.css" rel="stylesheet" media="all">

</head>
{{-- @if($errors->has('email1') || $errors->has('password1') || Session::has('msg'))
<script>
 
    $(document).ready(function(){
    // Show the Modal on load
    $('#myModal').modal('show')

});
</script>
@endif --}}
<body class="animsition" >
    <div class="page-wrapper" >
        <div class="page-content--bge5" style="background: url('/public/file/login.jpg') no-repeat">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content" style="border-radius: 40px;">
                        <div class="login-logo">
                                <img src="file/logologin.png" alt="CoolAdmin">
                        </div>
                        <div class="login-form">
                             @if (Session::has('msg'))
                                <script> alert('{{ Session::get('msg') }}')</script>
                            @endif
                            <form action="" method="post" action="{{Route('auth.login')}}">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Tài Khoản</label>
                                    <input class="au-input au-input--full" type="text" name="username" id="username" placeholder="Tên đăng nhập" required>
                                </div>
                                <div class="form-group">
                                    <label>Mật Khẩu</label>
                                    <input class="au-input au-input--full" type="password" name="password" id="password" placeholder="Mật khẩu" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="#">Quên Mật Khẩu?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20"  style="    border-radius: 10px;" type="submit">Đăng Nhập</button>
                                 <label>
                                    Chưa có tài khoản?  <a href="#" data-toggle="modal" data-target="#myModal">Đăng Kí</a>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('auth.register')  
    <!-- Jquery JS-->
    <script src="template/login/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="template/login/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="template/login/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- template/login JS       -->
    <script src="template/login/vendor/slick/slick.min.js">
    </script>
    <script src="template/login/vendor/wow/wow.min.js"></script>
    <script src="template/login/vendor/animsition/animsition.min.js"></script>
    <script src="template/login/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="template/login/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="template/login/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="template/login/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="template/login/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="template/login/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="template/login/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="template/login/js/main.js"></script>

</body>

</html>
{{-- <script type="text/javascript">
function checknull(){

    var username = document.getElementById("username");
    console.log(username.value);
    if(username.value == null)
    {
        
        username.setCustomValidity("Trường này không được để trống");
    }
    else
    {
         username.setCustomValidity("");
    }
}
    username.onchange = checknull;
    //username.onkeyup = checknull;
</script> --}}
<!-- end document-->
{{-- <script type="text/javascript">
        var phone = document.getElementById("username");
        var email = document.getElementById("password");
        $(".button").on('click', function(){
            
            $.ajax({
                method: "GET", 
                async: false,
                url: "{{ route('public.register.validateRegister') }}", 

            }).done(function(data) {
            
            var result = JSON.parse(data);
            var count = Object.keys(result).length;

            function validateusername(){ //hàm kiểm tra dữ liệu nhập vào đã tồn tại trong database
                for(var i = 0; i < count; i++){
                    var obj = result[i];
                    if(obj.phone == phone.value){
                        return true;
                    }
                }
                return false;
            }

            function validatepass(){ //hàm kiểm tra dữ liệu nhập vào đã tồn tại trong database
                for(var i = 0; i < count; i++){
                    var obj = result[i];
                    if(obj.email == email.value){
                        return true;
                    }
                }
                return false;
            }

            if(validatePhone() == true){
                phone.onchange = validatePhone;
                phone.onkeyup = validatePhone;
                phone.setCustomValidity("Số điện thoại '"+phone.value+"' đã được sử dụng"); // in ra đoạn thông báo nếu validateUsername() == true
            }else{
                 phone.setCustomValidity("");
            }

            if(validateEmail() == true){
                email.onchange = validateEmail;
                email.onkeyup = validateEmail;
                email.setCustomValidity("Email '"+email.value+"' đã được sử dụng"); // in ra đoạn thông báo nếu validateUsername() == true
            }else{
                 email.setCustomValidity("");
            }
        });
    });
</script> --}}