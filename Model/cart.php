<?php 
    class cart {
        function add_items($key, $quantity) {
            $prod = new product();
            $pros = $prod->getProductID($key);
            if(isset($_SESSION['cart'][$key]))
            {
                $a = $quantity + $_SESSION['cart'][$key]['soluong'];
                $gh=new cart();
                $gh->update_items($key, $a); 
                return; 
            }
            $image=$pros["image"];
            $tensp=$pros["tensp"];
            $cost=$pros["dongia"];
            $total= $quantity*$cost;
            
            // Tạo 1 đối tượng , kiểu array
            $item=array(
                'id_sanpham'=> $key,
                'image'=>$image,
                'tensp'=>$tensp,
                // 'size'=> $size,
                'soluong'=>$quantity,
                'dongia'=>$cost,
                'total'=>$total,
            );

            // đưa đối tượng vào trong session ('cart);
            $_SESSION['cart'][$key] = $item;
 
        }

        function getTotal() {
            $subtotal = 0;
            foreach($_SESSION['cart'] as $item) {
                $subtotal += $item['total'];
            }
            return number_format($subtotal, 2);
        }

        function delete_items($key) {
            unset($_SESSION['cart'][$key]);
        }

        function update_items($key, $quantity) {
            if($quantity <= 0) {
                $this->delete_items($key);
            } else {
                $_SESSION['cart'][$key]['soluong'] = $quantity;
                $total_new = $_SESSION['cart'][$key]['soluong']*$_SESSION['cart'][$key]['dongia'];
                $_SESSION['cart'][$key]['total'] = $total_new;
            }
        }
    }
?>