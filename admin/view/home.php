<div class="row">
<div class="main">
    <h2>THỐNG KÊ</h2>
</div>
<div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th>TÊN LOẠI</th>
                            <th>SỐ SẢN PHẨM</th>
                        </tr>
                        <?php
                            if(isset($productsStats)&&(count($productsStats)>0)){
                                foreach ($productsStats as $item) {
                        ?>
                                    <tr>
                                        <td><?=$item['name']?></td>
                                        <td><?=$item['total']?></td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>

            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th>HOÁ ĐƠN</th>
                            <th>DOANH THU</th>
                        </tr>
                        <?php
                            $total = 0;
                            if(isset($revenueStats)&&(count($revenueStats)>0)){
                                $i=1;
                                foreach ($revenueStats as $item) {
                                    $total += $item['total'];
                        ?>
                                    <tr>
                                        <td><?=$item['id']?></td>
                                        <td><?=$item['total']?></td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                        <tr>
                            <th>Tổng doanh thu</th>
                            <th>
                            <?=$total?>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
</div>