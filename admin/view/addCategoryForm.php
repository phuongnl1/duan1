<div class="row mb ">
                <div class="row">
                    <h1>THÊM DANH MỤC</h1>
                    <form action="index.php?act=addCategory" method="post">
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Tên danh mục</td>
                            <td><input required type="text" name="name" id="name" value=""></td>
                        </tr>
                        <tr>
                            <td>Mô tả</td>
                            <td>
                                <textarea required id="description" name="description" rows="4" cols="50"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Vị trí</td>
                            <td><input required type="number" name="position" id="position" value=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="themmoi" value="Thêm mới"></td>
                        </tr>
                    </table>
                    </form>
                </div>
</div>