<div class="table-responsive">
  
    <form action="index.php?action=cart&act=update_item" method="post">
      <table class="menu table-bordered">
        <thead>
          <tr><td colspan="5"><h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2></td></tr>
          <tr class="table">
            <th>Số TT</th>
            <th>Thông Tin Sản Phẩm</th>
            <th>Giá</th>
          </tr>
        </thead>
        <tbody style="color:red">
            <?php
            $j=0;
            foreach($_SESSION['cart'] as $key=>$item):
            $j++;
            ?>
            
            <tr>
              <td><?php echo $j; ?></td>
              <td>
              <img width="50px" height="50px" src="Public\image\<?php echo $item['image']; ?>">
              <?php echo $item['tensp'];?>
              </td>
              <td>Đơn Giá: <?php echo number_format($item['dongia']); ?>
                - Số Lượng: 
                <input type="number" name="newqty[<?php echo $key;?>]" value="<?php echo $item['soluong']; ?>" /><br />
                <p style="float: right;"> Thành Tiền <?php echo number_format($item['total']); ?> <sup><u>đ</u></sup></p>
              </td>
              <td><a href="index.php?action=cart&act=delete_item&id=<?php echo $key; ?>"><button type="button" class="custom-btn btn-9">Xóa</button></a>
                <button type="submit" class="custom-btn btn-9">Sửa</button>
              </td>
            </tr>
            <?php
            endforeach;
            ?>
          <tr>
            <td colspan="3">
              <b>Tổng Tiền</b>
            </td>
            <td style="float: right;">
              <b>  
                <?php
                    $gh=new cart(); 
                    echo $gh->getTotal();
                ?>
              
              <sup><u>đ</u></sup></b>
            </td>
            <td><a href="index.php?action=hoadon" type="button" class="custom-btn btn-9">Thanh Toán</a>
          </tr>
        </tbody>
      </table>
    </form>
 
</div>
</div>