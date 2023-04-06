<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 login-sec">
        <h3 class="menu text-center"><b>Login</b></h3>
        <form action="index.php?action=login&act=dangnhap_action" class="login-form" method="post">
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
            <input type="password" class="form-control" name="txtmatkhau" placeholder="">
          </div>


          <div class="form-check">
            <button class="btn btn-primary float-right" type="submit"> Đăng Nhập</button> 
          </div>
          <div><a href="index.php?action=forgetps" type="button">Forget password</a></div>
        </form>
</section>