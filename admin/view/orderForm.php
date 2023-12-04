<div class="row mb ">
                <div class="row">
                    <h1>CHI TIẾT ĐƠN HÀNG</h1>
                    <form action="index.php?act=updateOrder" method="post">
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Khách hàng</td>
                            <td><?=$order['full_name']?></td>
                        </tr>
                        <tr>
                            <td>Phương thức thanh toán</td>
                            <td>
                                <?=$order['payment_method']?>
                            </td>
                        </tr>
                        <tr>
                            <td>Trạng thái</td>
                            <td>
                            <?=$order['is_paid'] == 1 ? 'Đã thanh toán' : 'Chưa thanh toán'?>
                            </td>
                        </tr>
                        <tr>
                            <td>Thông tin sản phẩm</td>
                            <td>
                                <table>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Giá</th>
                                    </tr>
                                    <?php
                                    $total = 0;
                                        if(isset($order_detail)&&(count($order_detail)>0)){
                                            foreach ($order_detail as $item) {
                                                $total += $item['amount'];
                                    ?>
                                                <tr>
                                                    <td><?=$item['id']?></td>
                                                    <td><?=$item['name']?></td>
                                                    <td><img src="<?=$item['image']?>" alt=""></td>
                                                    <td><?=$item['amount']?></td>
                                                </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                    <tr>
                                    <th colspan="3">Tổng đơn hàng</th>
                                        <th>
                                            <div><?=$total?></div>
                                        </th>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>Thay đổi trạng thái</td>
                            <td>
                                <select required name="status" id="status">
                                    <option value="1" <?=$order['is_paid'] == 1 ? 'selected' : ''?>>Đã thanh toán</option>
                                    <option value="0" <?=$order['is_paid'] == 0 ? 'selected' : ''?>>Chưa thanh toán</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="thaydoi" value="Thay đổi trạng thái"></td>
                        </tr>
                        <input type="hidden" name="id" value="<?=$order['id']?>">
                    </table>
                    </form>
                </div>
        </div>