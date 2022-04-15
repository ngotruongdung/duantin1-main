<div class="list-admin">
            <h3>Thống Kê Danh Mục</h3>
            <div class="table">
                <table>
                    <tr>
                        <th>Mã DM</th>
                        <th>Tên DM</th>
                        <th>Số Lượng</th>
                        <th>Giá+</th>
                        <th>Giá-</th>
                        <th>Giá TBinh</th>
                    </tr>
                    <?php
                        foreach ($listthongke as $thongke){
                            extract($thongke);
                            echo '
                             <tr style="text-align: center;">
                                <td>'.$madm.'</td>
                                <td>'.$tendm.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.number_format($maxprice,0, ',', '.').'đ</td>
                                <td>'.number_format($minprice,0, ',', '.').'đ</td>
                                <td>'.number_format($avgprice,0, ',', '.').'đ</td>
                            </tr>';
                        }
                    ?>
                </table>
            </div>
                
                <div class="btn">
                    <a href="index.php?act=analysis"><input type="button" value="Biểu Đồ" class="button-19"></a>
                </div>
    </div>