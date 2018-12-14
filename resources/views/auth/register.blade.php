<div class="modal fade" id="myModal" role="dialog"{{--  @if($errors->has('email1') || $errors->has('password1')) style="display: block; opacity: 1" @endif --}}>
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" style="    padding-left: 37%;">Đăng Kí</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>

        <div class="modal-body">
            <div class="main-login main-center">
          
          <form class="form-horizontal" method="post" action="{{-- {{Route('auth.login')}} --}}">
            {{ csrf_field() }}
           <div class="form-group">
              <label>Tài Khoản</label>
              <input class="au-input au-input--full" type="text" name="username" placeholder="nhập tên đăng nhập">
          </div>
          <div class="form-group">
              <label>Mật Khẩu</label>
              <input class="au-input au-input--full" type="password" name="password" placeholder="nhập mật khẩu">
          </div>
          <div class="form-group">
              <label>Họ Và Tên</label>
              <input class="au-input au-input--full" type="text" name="fullname" placeholder="nhập họ và tên">
          </div>
           <div class="form-group">
              <label>Email</label>
              <input class="au-input au-input--full" type="text" name="email" placeholder="nhập địa chỉ email">
          </div>
           <div class="form-group">
              <label>MAC </label>
              <input class="au-input au-input--full" type="text" name="mac" placeholder="nhập địa chỉ mac của thiết bị">
          </div>
           <div class="form-group">
              <label>Key </label>
              <input class="au-input au-input--full" type="text" name="key" placeholder="nhập key kích hoạt có trên thiết bị">
          </div>
           <div class="form-group">
              <label>Số Lượng Cây Trồng </label>
              <input class="au-input au-input--full" type="text" name="key" placeholder="nhập số lượng cây muốn quản lí">
          </div>
          <button class="au-btn au-btn--block au-btn--green m-b-20"  style="border-radius: 10px;" type="submit">Đăng Kí</button>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>