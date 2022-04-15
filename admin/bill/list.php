<div class="list-bill list-admin">
    <h3>DANH SÁCH ĐƠN HÀNG</h3>
    <table>
        <tr>
            <th>Mã đơn</th>
            <th>Khách hàng</th>
            <th>Số lượng</th>
            <th>Giá trị ĐH</th>
            <th>Ngày đặt hàng</th>
            <th>Tình trạng</th>
            <th>Thao Tác</th>
        </tr>

        <?php
            foreach ($listbill as $bill) {
                extract($bill);
                $suadh="index.php?act=editbill&id=".$id;
                $xoadh="index.php?act=delbill&id=".$id;
                $kh= $bill["bill_name"].'
                <br> '.$bill["bill_email"].'
                <br> '.$bill["bill_diachi"].'
                <br> '.$bill["bill_sdt"];
                $countsp=loadall_cart_count($bill['id']);
                $ttdh=get_ttdh($bill['bill_status']);
                echo'<tr>
                        <td>DON-'.$bill['id'].'</td>
                        <td>'.$kh.'</td>
                        <td>'.$countsp.'</td>
                        <td>'.number_format($bill['total'],0, ',', '.').'đ</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td>'. $ttdh.'</td>
                        <td>
                            <a href="'.$suadh.'"><input type="button" value="Sửa" class="button-19"></a>
                            <a href="'.$xoadh.'"><input type="button" value="Xóa" class="button-19"></a>
                        </td>
                    </tr>';
            }
        ?>
    </table>
</div>