<div class="row">
            <div class="row frmtitle">
                <H1>DANH SÁCH LOẠI HÀNG</H1>
            </div>
            <div class="row frmcontent">

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th>MÃ LOẠI</th>
                            <th>TÊN LOẠI</th>
                            <th>ACTION</th>
                        </tr>
                        <?php
                        foreach($categories as $item) {
                        ?>
                            <tr>
                            <td><?=$item['id']?></td>
                            <td><?=$item['name']?></td>
                            <td><a href="index.php?act=updateCategory&id=<?=$item['id']?>">Sửa</a> | <a href="index.php?act=deleteCategory&id=<?=$item['id']?>">Xóa</a></td>
                        </tr>
                        <?php
                        }
                        ?>

                    </table>
                </div>
                <div class="row mb10">
                <a href="index.php?act=addCategory"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>