<div class="row">
            <div class="row frmtitle">
                <H1>DANH SÁCH SẢN PHẨM</H1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 frmdssanpham">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH ẢNH</th>
                            <th>GIÁ</th>
                            <th>ACTION</th>
                        </tr>
                        <?php
                        foreach($products as $item) {
                        ?>
                        <tr>
                            <td><?=$item['id']?></td>
                            <td><?=$item['name']?></td>
                            <td><img src="<?=$item['image']?>" width="200px"></td>
                            <td><?=$item['price']?></td>
                            <td><a href="index.php?act=updateProduct&id=<?=$item['id']?>">Sửa</a> | <a href="index.php?act=deleteProduct&id=<?=$item['id']?>">Xóa</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
                <div class="row mb10">
                    <a href="index.php?act=addProduct"><input type="button" value="Thêm sản phẩm"></a>
                </div>
            </div>
</div>