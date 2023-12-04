<div class="row">
            <div class="row frmtitle">
                <H1>DANH SÁCH LOẠI HÀNG</H1>
            </div>
            <div class="row frmcontent">

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>KHÁCH HÀNG</th>
                            <th>TRẠNG THÁI</th>
                            <th>PHƯƠNG THỨC THANH TOÁN</th>
                            <th>ACTION</th>
                        </tr>
                        <?php
                        foreach($orders as $item) {
                        ?>
                        <tr>
                            <td><?=$item['id']?></td>
                            <td><?=$item['full_name']?></td>
                            <td><?=$item['is_paid']==0? 'Chưa thanh toán' : 'Đã thanh toán'?></td>
                            <td><?=$item['payment_method']?></td>
                            <td><a href="index.php?act=updateOrder&id=<?=$item['id']?>">XEM</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
            </div>
        </div>