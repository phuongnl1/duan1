<?php
function addToCart() {
    if(isset($_POST['dathang'])&&($_POST['dathang'])){
        //lấy giá trị
        $img=$_POST['img'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $id=$_POST['id'];
        $soLuong=$_POST['soluong'];
  
        //add vào giỏ hàng
        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();

        if (isset($_SESSION['cart'][$id])) {
          $_SESSION['cart'][$id]['quantity'] += $soLuong;
        } else {
          //var_dump($_SESSION['cart']);
          $_SESSION['cart'][$id] = array("img" => $img, "name" => $tensp, "quantity" => $soLuong, "price" => $gia);
          //var_dump($_SESSION['cart']);exit;
        }
    }
}

function deleteCart($id) {
  //xoá 1 sản phẩm trong giỏ hàng
  if (isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]);
  }
}
?>