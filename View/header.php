 
 <!-- menu -->
 <nav class="navbar navbar-expand-sm bg sticky-placeholder">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
      <span class="fas fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=home">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle " href="" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="index.php?action=new">New<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="index.php?action=Blog">Blog</a>
            <a class="dropdown-item" href="#">Oder website</a>
          </div>
        </li>

        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="index.php?action=login">Login</a>
            <a class="dropdown-item" href="index.php?action=signup">SignUp</a>
            <a class="dropdown-item" href="index.php?action=login&act=logout">LogOut</a>
          </div>
        </li>
      </ul>
     
      <form class="form-inline my-2 my-lg-0">
        <div class="admin">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit" src="" width="10%;" id="admin-form" hidden><a href="#">Admin</a></button> &emsp;
            <div class="admin-form">
              <div class="admin-form-content">
                <h2>ADMIN <span class="fa-solid fa-xmark" id="admin-close"></span></h2>
                <form action="">
                  <p>Please enter all information in the content below!</p>
                  <div class="form-item d-flex align-items-center">
                    <label for="" style="min-width:100px;" class="text-right mr-4">Admin name: </label>
                    <input type="text" placeholder="Tên đăng nhập của bạn">
                  </div>
                  <div class="form-item d-flex align-items-center">
                    <label for="" style="min-width:100px;" class="text-right mr-4">Password: </label>
                    <input type="password" placeholder="Mật khẩu">
                  </div>
                  <button class="custom-btn btn-3">Đăng nhập</button>
                </form>
              </div>
            </div>
          </div>

        <!-- <div class="User">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" src="" width="10%;" id="user-form" ><a href="" style="color: #fff;
            text-decoration: none;">Account</a></button> &emsp;</a>
          <div class="user-form">
            <div class="user-form-content">
              <h2>Account<span class="fa-solid fa-xmark" id="user-close"></span></h2>
              <form action="">
                <p>Please enter all information in the content below!</p>
                <div class="form-item d-flex align-items-center">
                  <label for="" style="min-width:100px;" class="text-right mr-4">Username: </label>
                  <input type="text" placeholder="Your account name">
                </div>
                <div class="form-item d-flex align-items-center">
                  <label for="" style="min-width:100px;" class="text-right mr-4">Password: </label>
                  <input type="password" placeholder="Password">
                </div>
                <button class="custom-btn btn-3"><a href="index.php?action=login">Log in</a></button><br><br>
                <a href="index.php?action=signup" style="color:#e66a31">Create Account?</a>
              </form>
            </div>
          </div>
        </div>  -->
        
        <!-- <a href="index.php?action=login&act=logout" class="nav-link">Đăng Xuất</a> -->
        <div>
            <a href="index.php?action=cart" class="nav-link"><span class="	fas fa-shopping-basket"></span></a>
        </div>
        <?php 
              $dem = 0;
                if(isset($_SESSION['cart'])) {
                  $dem = count($_SESSION['cart']);
                      } else {
                        $dem = 0;
                      }
        ?>
            <span style="color: red; margin-top: 20px; margin-left: 0px;">(<?php echo $dem;?>)</span>

        </form>
        <?php
        if(isset($_SESSION['id_khachhang']) && isset($_SESSION['ten_khachhang'])):
        $name=$_SESSION['username'];   
        ?>
        <p style="color: red; margin-top: 20px; margin-left: 0px;"><?php echo "Xin chào ".$name." !" ;?></p>
        <?php
        else:
        echo '<p style="color: red; margin-top: 20px; margin-left: 0px;">'."Xin Chào!".'</p>';
        ?>
        <?php
        endif;
        ?>
   </nav>    
     <!--Các slide bên trong carousel-inner-->
     <div class="carousel-inner">
        <!--Slide 1 thiết lập hiện thị đầu tiên .active-->
        <div class="carousel-item active">
          <img class="d-block w-100 " src="/public/image/header_2.jpg" width="100%" height="700px;">
            <div class="carousel-caption">
              <h5>THE COFFEE 1408</h5>
              <p>We are honored to serve you!</p>
            </div>
            <div class="carousel-caption">
              <h1 style="margin-top:-450px;">THE COFFEE 1408</h1>
            </div>
          
            <form action="index.php?act=timkiem" method="post">
            <div class="search-wrapper">
              <div class="input-holder">
              <input type="text" name="txtsearch" class="search-input" placeholder="Type to search" />
              <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
             </div>
              <span class="close" onclick="searchToggle(this, event);"></span>
            </div>
            </form>

        </div>
      </div> 

      <!--Cho thêm khiển chuyển slide trước, sau nếu muốn-->
      <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span></a>
      <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    <!--Hết tạo điều khiển chuyển Slide--> 
    <script src="/Public/script/Coffee.js"></script>
     </div>