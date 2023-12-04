        <div class="row mb ">
            <?php
            if (isset($_SESSION['objuser'])) {
                echo '<form action="index.php?act=payment" method="post">';
            }
            ?>
                <div class="row">
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <h1>GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $id => $item) {
                            $price = $item['price'] * $item['quantity'];
                            $total += $price;
                            ?>
                            <tr>
                                <td><?=$id?></td>
                                <td><img src="../view/<?=$item['img']?>" alt=""></td>
                                <td><?=$item['name']?></td>
                                <td><?=$item['price']?></td>
                                <td><?=$item['quantity']?></td>
                                <td>
                                    <div><?=$price?></div>
                                </td>
                                <td><a href="index.php?act=delCart&id=<?=$id?>">Xoá</a></td>
                            </tr>
                        <?php 
                            }
                        } 
                        ?>
                        <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div><?=$total?></div>
                            </th>
                            <th>
                                <div></div>
                            </th>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <input type="submit" name="payment" class="dongy" value="ĐỒNG Ý ĐẶT HÀNG">
                </div>
                <?php
                if (isset($_SESSION['objuser'])) {
                    echo '</form>';
                }
                ?>
        </div>