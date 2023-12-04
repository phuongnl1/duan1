<div class="row mb ">
            <div class="boxtrai mr">
                <div class="row">
                    <div class="banner">
                        <img src="view/images/banner.jpg" alt="">
                    </div>
                </div>
                <div class="row">
                        <?php
                        if ($products) {
                            foreach ($products as $item) {
                            ?>
                            <div class="boxsp mr">
                                <form action="index.php?act=cart" method="post">
                                    <div class="row img"><a href="index.php?act=product-detail&id=<?=$item['id']?>"><img src="<?=$item['image']?>" alt=""></a></div>
                                    <p>$<span><?=$item['price']?></span></p>
                                    <a href="#"><?=$item['name']?></a>
                                    <input type="number" name="soluong" min="1" max="10" value="1">
                                    <input type="hidden" name="img" value="<?=$item['image']?>">
                                    <input type="hidden" name="tensp" value="<?=$item['name']?>">
                                    <input type="hidden" name="gia" value="<?=$item['price']?>">
                                    <input type="hidden" name="id" value="<?=$item['id']?>">
                                    <button type="submit" name="dathang" value="Đặt hàng"><img width="20" src="view/images/cart.png"></button>
                                </form>
                            </div>
                            <?php
                            }
                        } else {
                            echo "<p>Chưa có sản phẩm nào!</p>";
                        }
                        ?>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                        if (isset($_SESSION['objuser'])) {
                            echo 'Bạn đã đăng nhập với:';
                            echo '<br> - Tên đăng nhập: ' . $_SESSION['objuser']['username'];
                            echo '<br> - Role: ' . ($_SESSION['objuser']['role'] == 1 ? '<a href="admin/">Admin</a>' : 'Client');
                            echo '<br> <a href="index.php?act=cart">Xem giỏ hàng</a> | <a href="index.php?act=logout">Đăng xuất</a>.';
                        } else {
                            ?>
                            <form action="index.php?act=home" method="post">
                                <div class="row mb10">
                                    Tên đăng nhập<br>
                                    <input type="text" name="user">
                                </div>
                                <div class="row mb10">
                                    Mật khẩu<br>

                                    <input type="password" name="pass">
                                </div>
                                <div class="row mb10">
                                    <input type="checkbox" name=""> Ghi nhớ tài khoản?</div>
                                <div class="row mb10">
                                    <input type="submit" name="dangnhap" value="Đăng nhập">
                                </div>
                            </form>
                            <li>
                                <a href="#">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=register">Đăng ký thành viên</a>
                            </li>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                            // $categories là arrat chứa toàn bộ danh mục
                            $subCategories = $categories;
                            // duyệt mảng danh mục
                            foreach($categories as $item) {
                                // điều kiện để lấy danh mục cha 
                                if ($item['parent_id'] == 0) {
                                ?>
                                    <li>
                                        <a href="index.php?catId=<?=$item['id']?>"><?=$item['name'];?></a>
                                    </li>
                                    
                                    <?php
                                    // duyệt mảng danh mục
                                    foreach($subCategories as $category) {
                                        // điều kiện để lấy danh mục con thuộc danh mục cha 
                                        if ($category['parent_id'] != 0 && $category['parent_id'] == $item['id']) {
                                        ?>
                                        <li>
                                            --- <a href="index.php?catId=<?=$category['id']?>"><?=$category['name'];?></a>
                                        </li>
                                        <?php
                                        }
                                    }
                                    ?>
                                <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10">
                            <img src="view/images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>