<div class="row mb ">
                <div class="row">
                    <h1>CHI TIẾT SẢN PHẨM</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Tên sản phẩm</td>
                            <td><?=$product['name']?></td>
                        </tr>
                        <tr>
                            <td width="20%">Danh mục</td>
                            <td>
                                <?=$category['name']?>
                            </td>
                        </tr>
                        <tr>
                            <td>Hình ảnh</td>
                            <td>
                                <img src="<?=$product['image']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Mô tả</td>
                            <td>
                            <?=$product['description']?>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá</td>
                            <td><?=$product['price']?></td>
                        </tr>
                        <tr>
                            <td>Số lượng</td>
                            <td><?=$product['quantity']?></td>
                        </tr>
                        <tr>
                            <td>Số lượng</td>
                            <td>
                                <form action="index.php?act=cart" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="hidden" name="img" value="<?=$product['image']?>">
                                    <input type="hidden" name="tensp" value="<?=$product['name']?>">
                                    <input type="hidden" name="gia" value="<?=$product['price']?>">
                                    <input type="hidden" name="id" value="<?=$product['id']?>">
                                    <button type="submit" name="dathang" value="Đặt hàng">Đặt hàng</button>
                                </form>
                            </td>
                        </tr>
                        
                    </table>
                    <h1>COMMENTS</h1>
                    <table class="thongtinnhanhang">
                    <?php
                    if (isset($_SESSION['objuser'])) {
                    ?>
                    <form action="index.php?act=comment" method="POST">
                        <input type="hidden" name="product_id" value="<?=$product['id']?>">
                            <tr>
                                <td width="20%">Nhận xét</td>
                                <td><textarea required id="comment" name="comment" rows="4" cols="50"></textarea></td>
                            </tr>
                            <tr>
                                <td width="20%"></td>
                                <td><button type="submit" name="submit" value="Submit">Nhận xét</button></td>
                            </tr>
                    </form>
                    <?php
                    }
                    ?>
                    </table>
                    <?php
                        if (isset($comments)) {
                            echo '<ul>';
                            foreach ($comments as $item) {
                            ?>
                            <li><?=$item['comment']?></li>
                            <?php
                            }
                            echo '</ul>';
                        }
                    ?>
                </div>
</div>