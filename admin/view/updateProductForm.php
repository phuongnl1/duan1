<div class="row mb ">
                <div class="row">
                    <h1>CHỈNH SỬA SẢN PHẨM<Menu:toolbar></Menu:toolbar></h1>
                    <form action="index.php?act=updateProduct" method="post" enctype="multipart/form-data">
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Tên sản phẩm</td>
                            <td><input required type="text" name="name" id="name" value="<?=$product['name']?>"></td>
                        </tr>
                        <tr>
                            <td width="20%">Danh mục</td>
                            <td>
                                <select name="category_id" id="category_id">
                                <?php
                                    if(isset($categories)&&(count($categories)>0)){
                                        foreach ($categories as $category) {
                                            $selected = $category['id'] == $product['category_id'] ? 'selected' : '';
                                            echo '<option '.$selected.' value="'.$category['id'].'">'.$category['name'].'</option>';
                                        }
                                    }
                                ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Hình ảnh</td>
                            <td>
                                <input <?=$product['image']!='' ? '' : 'required'?> type="file" name="image" id="image">
                                Hình ảnh cũ: <img src="<?=$product['image']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Mô tả</td>
                            <td>
                                <textarea required id="description" name="description" rows="4" cols="50"><?=$product['description']?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá</td>
                            <td><input required type="number" name="price" id="price" value="<?=$product['price']?>"></td>
                        </tr>
                        <tr>
                            <td>Số lượng</td>
                            <td><input required type="number" name="quantity" id="quantity" value="<?=$product['quantity']?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="edit" value="Cập nhật"></td>
                        </tr>
                        <input type="hidden" name="id" value="<?=$product['id']?>">
                        <input type="hidden" name="oldImage" value="<?=$product['image']?>">
                    </table>
                    </form>
                </div>
</div>