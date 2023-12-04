<div class="row mb ">
                <div class="row">
                    <h1>THÊM DANH MỤC</h1>
                    <form action="index.php?act=addProduct" method="post" enctype="multipart/form-data">
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Tên sản phẩm</td>
                            <td><input required type="text" name="name" id="name" value=""></td>
                        </tr>
                        <tr>
                            <td width="20%">Danh mục</td>
                            <td>
                                <select required name="category_id" id="category_id">
                                <?php
                                    if(isset($categories)&&(count($categories)>0)){
                                        foreach ($categories as $category) {
                                            echo '<option value="'.$category['id'].'">'.$category['name'].'</option>';
                                        }
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hình ảnh</td>
                            <td>
                                <input required type="file" name="image" id="image">
                            </td>
                        </tr>
                        <tr>
                            <td>Mô tả</td>
                            <td>
                                <textarea required id="description" name="description" rows="4" cols="50"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá</td>
                            <td><input required type="number" name="price" id="price" value=""></td>
                        </tr>
                        <tr>
                            <td>Số lượng</td>
                            <td><input required type="number" name="quantity" id="quantity" value=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="themmoi" value="Thêm mới"></td>
                        </tr>
                    </table>
                    </form>
                </div>
</div>