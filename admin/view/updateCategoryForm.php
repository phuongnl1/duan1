<div class="row mb ">
                <div class="row">
                    <h1>CẬP NHẬT DANH MỤC</h1>
                    <form action="index.php?act=updateCategory" method="post">
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Tên danh mục</td>
                            <td><input required type="text" name="name" id="name" value="<?=$category['name']?>"></td>
                        </tr>
                        <tr>
                            <td>Mô tả</td>
                            <td>
                                <textarea required id="description" name="description" rows="4" cols="50"><?=$category['description']?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Vị trí</td>
                            <td><input required type="number" name="position" id="position" value="<?=$category['position']?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="capnhat" value="Cập nhật"></td>
                        </tr>
                        <input type="hidden" name="id" value="<?=$category['id']?>">
                    </table>
                    </form>
                </div>
</div>