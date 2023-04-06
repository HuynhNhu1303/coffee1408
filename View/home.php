
<!-- COFFEE NICARAGUA -->
 <section id="" class="">
        <div class="menu">
          <p>Coffee Menu</p>
          <h2>COFFEE NICARAGUA WHOLE BEAN</h2>
        </div>
        <div class="allsp text-right">
        <a href="index.php?action=Nicaraguas" class="btn">ALL
        <span style="color: gray;"class="	far fa-arrow-alt-circle-right"></span></div>
        </a>
        </div>
        <!-- Sản phẩm -->
        <div class="container">
        <div class="row">
        <?php
          $sp = new product();
          $result=$sp -> getNicaragua();
          while ($set=$result->fetch()) { 
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
<!-- COFFEE ETHIOPIA -->
<section id="" class="">
        <div class="menu mt-5">
          <b>----------------------------</b>
          <h2><img src="/Public/image/cf.png" alt="" class="cf">COFFEE ETHIOPIA WHOLE BEAN</h2>
        </div>
        <div class="allsp text-right">
        <a href="index.php?action=Ethiopias" class="btn">ALL
        <span style="color: gray;"class="	far fa-arrow-alt-circle-right"></span></div>
        </a>
        </div>
        <!-- Sản phẩm -->
        <div class="container">
        <div class="row">
        <?php
          $sp = new product();
          $result=$sp -> getEthiopia();
          while ($set=$result->fetch()){ 
        ?>
        <div class="col-xs-3 col-sm-6 col-md-4 col-lg-3">
          <div class="cardl card-body text-center" id="box"  style="margin-top:10px;">
            <div class="card" style="width: 16rem;">
            <div class="card" style="width: 16rem align=center">
            <img class="card-img-top" src="Public\image\<?php echo $set["image"] ?>">
            </div>
            <div class="card-body">
              <div class="mb-4" > 
              <img src="Public\image\<?php echo $set["danhgia"] ?>" alt="">
              <a href="index.php?action=Ethiopias&action=detail&id=<?php echo $set["id_sanpham"]; ?>" class="btn"><?php echo $set["tensp"];?></a>
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

<!-- COFFEE COLUMBIA -->
<section id="" class="">
        <div class="menu mt-5">
        <b>----------------------------</b>
          <h2><img src="/Public/image/cf.png" alt="" class="cf"></img>COFFEE COLUMBIA WHOLE BEAN</h2>
        </div>
        <div class="allsp text-right">
        <a href="index.php?action=Columbias" class="btn">ALL
        <span style="color: gray;"class="	far fa-arrow-alt-circle-right"></span></div>
        </a>
        </div>
        <!-- Sản phẩm -->
        <div class="container">
        <div class="row">
        <?php
          $sp = new product();
          $result=$sp -> getColumpia();
          while ($set=$result->fetch()){ 
        ?>
        <div class="col-xs-3 col-sm-6 col-md-4 col-lg-3">
          <div class="cardl card-body text-center" id="box"  style="margin-top:10px;">
            <div class="card" style="width: 16rem;">
            <div class="card" style="width: 16rem align=center">
            <img class="card-img-top" src="Public\image\<?php echo $set["image"] ?>">
            </div>
            <div class="card-body">
              <div class="mb-4" > 
              <img src="Public\image\<?php echo $set["danhgia"] ?>" alt="">
              <a href="index.php?action=Columbias&action=detail&id=<?php echo $set["id_sanpham"]; ?>" class="btn"><?php echo $set["tensp"];?></a>
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



