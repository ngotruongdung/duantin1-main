<section class="box bill">
    <h3 class="heading">Đơn Hàng Của Tôi</h3>
    <table>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Ngày Đặt</th>
            <th>Số Lượng Mặt Hàng</th>
            <th>Tổng Tiền</th>
            <th>Tình trạng</th>
        </tr>
        <?php
            if(is_array($listbill)){
                foreach ($listbill as $bill) {
                    extract($bill);
                    $ttdh=get_ttdh($bill['bill_status']);
                    $contsp=loadall_cart_count($bill['id']);
                    echo '<tr>
                                <td>DON-'.$bill['id'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$contsp.'</td>
                                <td>'.number_format($bill['total'],0, ',', '.').'đ</td>
                                <td>'.$ttdh.'</td>
                            </tr>';
                }
                
            }
        ?>
    </table>
    <a href="index.php">
        <button class="btn-login-2">Quay lại mua sắm</button>
    </a>
</section>