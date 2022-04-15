<div class="list-product list-admin">
    <h3>DANH SÁCH SẢN PHẨM</h3>
    <table>
        <tr>
            <th>ID Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Lượt Xem</th>
            <th>Size</th>
            <th>Màu</th>
            <th>Thao Tác</th>
        </tr>
        <?php
                        foreach ($listsanpham as $sanpham){
                            extract($sanpham);
                            $suasp="index.php?act=editpro&id=".$id;
                            $xoasp="index.php?act=delpro&id=".$id;
                            $hinh="<img src='".$img."' height='80'>";
                            echo '
                             <tr>
                                <td>'.$id.'</td>
                                <td>'.$name_sp.'</td>
                                <td>'.$hinh.'</td>
                                <td>'.$price.'</td>
                                <td>'.$luotxem.'</td>
                                <td>M L XL</td>
                                <td> Xanh Đỏ</td>
                                
                                <td>
                                <a href="'.$suasp.'" ><input type="button" value="Sửa" class="button-19"></a>
                                <a href="'.$xoasp.'"><input type="button" value="Xóa" class="button-19"></a>
                                </td>
                            </tr>';
                        }
                    ?>
        <!-- <tr>
                <td>Tee-Shirt Blue V2</td>
                <td><img src="../images/product-1.jpg" alt="" width="80"></td>
                <td>180.000đ</td>
                <td>20</td>
                <td>M L XL</td>
                <td>Xanh - Đỏ - Tím</td>
                <td>Sửa Xóa</td>
            </tr>
            <tr>
                <td>Tee-Shirt Blue V2</td>
                <td><img src="../images/product-1.jpg" alt="" width="80"></td>
                <td>180.000đ</td>
                <td>20</td>
                <td>M L XL</td>
                <td>Xanh - Đỏ - Tím</td>
                <td>Sửa Xóa</td>
            </tr>
            <tr>
                <td>Tee-Shirt Blue V2</td>
                <td><img src="../images/product-1.jpg" alt="" width="80"></td>
                <td>180.000đ</td>
                <td>20</td>
                <td>M L XL</td>
                <td>Xanh - Đỏ - Tím</td>
                <td>Sửa Xóa</td>
            </tr>
            <tr>
                <td>Tee-Shirt Blue V2</td>
                <td><img src="../images/product-1.jpg" alt="" width="80"></td>
                <td>180.000đ</td>
                <td>20</td>
                <td>M L XL</td>
                <td>Xanh - Đỏ - Tím</td>
                <td>Sửa Xóa</td>
            </tr> -->
    </table>
</div>