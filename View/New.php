<!-- NEW PRODUCT-->
<section id="" class="">
        <div class="menu">
           <h2 style="color:red">LATEST PRODUCT</h2>
        </div>
        <!-- Sản phẩm -->
        <div class="container">
        <div class="row">
        <?php
          $sp = new product();
          $result=$sp -> getSanphammoi();
          while ($set=$result->fetch()){ 
        ?>
        <div class="col-xs-3 col-sm-6 col-md-4 col-lg-3">
          <div class="cardl card-body text-center" id="box"  style="margin-top:20px;">
            <div class="card" style="width: 16rem;">
            <div class="card" style="width:16rem align=center">
            <img class="card-img-top" src="Public\image\<?php echo $set["image"] ?>">
            </div>
            <div class="card-body">
              <div class="contentdetail" > 
              <img src="Public\image\<?php echo $set["danhgia"] ?>" alt="">
              <a href="index.php?action=Nicaraguas&action=detail&id=<?php echo $set["id_sanpham"]; ?>" class="btn"><?php echo $set["tensp"];?></a>
              <p class="card-money"><?php echo number_format($set["dongia"]);?><sup> vnđ</sup></p>
              </div>
            </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
      </div>
</section>