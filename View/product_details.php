<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;
    }
</script>
<section>
<div class="menu">
          <p>Add To Cart</p>
          <h2>THE DETAIL INFORMATION OF PRODUCT</h2>
        </div>
    <div class="container">
        <form action="index.php?action=cart" method="post">
            <div class="row">    
                <div class="col-md-6 col-lg-5">
                    <?php
                        if (isset($_GET["id"]))
                        {
                            $id=$_GET["id"];
                            $sp = new product();
                            $result=$sp -> getIDsanpham($id);
                            $id_sanpham = $result["id_sanpham"];
                            $tensp = $result["tensp"];
                            $image = $result["image"];
                            $dongia = $result["dongia"];
                            $daban = $result["daban"];
                            $mota = $result["mota"];
                            $ngaylap=$result["ngaylap"];
                            $mausac = $result["mausac"];
                            $size = $result["size"];
                            $danhgia = $result["danhgia"];
                            $nhom=$result["Nhom"];
                        }
                    ?>

                    <div class="card-body text-center" id="box"  style="margin-top:70px;">
                        <div class="gradient-border card" style="width: 22rem;">
                            <img class="card-img-top" src="Public\image\<?php echo $image; ?>" style="width: 22rem align-center">
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 col-lg-6 ml-7">
                    <div class="contentdetail" style="margin-top:100px;">
                        <img src="Public\image\<?php echo $danhgia; ?>" alt="">
                        <h2 class="name"><?php echo $tensp ?></h2>
                        <p class="description"><?php echo $mota; ?></p>
                        <p class="money"><?php echo number_format ($dongia);?>______________<?php echo $size;?></p>
                        <input type="hidden" name="id_sanpham" value="<?php echo $id_sanpham; ?>" />
                    </div>
                    <input type="hidden" name="size" id="size" value="0" />
                    Number of:
                        <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" /><br><br>
                  
                        <div class="action">
                        <button class="add-to-cart btn btn-default custom-btn btn-9" type="submit" data-toggle="modal" data-target="#myModal">Buy Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</section>

                <p class="float-left"><b>BÌnh luận </b></p>
                <hr>
            </div>
            <form action="" method="post">
            <div class="row">
              
                    <input type="hidden" name="txtmahh" value="" />
                    <img src="Content/imagetourdien/people.png" width="50px" height="50px"; />
                    <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment" placeholder="Thêm bình luận">  </textarea>
                    <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />
                                
            </div>
            
            </form>
            <div class="row">
                <p class="float-left"><b>Các bình luận</b></p>
                <hr>
            </div>
            <div class="row">
               <br/>
            </div>

        </div>
    </section>
