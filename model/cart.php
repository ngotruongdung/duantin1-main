<?php

    function viewcart(){
        global $img_path;
        $tong=0;
        $i=1;
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh = $img_path.$cart[2];
            $tong+=$cart[5];
            echo '
            <div class="check-out-item">
                <img src="'.$hinh.'" width="80px">
                <div class="check-out-info">
                    <b>'.$cart[1].'</b>
                    <p>'.number_format($cart[3],0, ',', '.').'đ x '.$cart[4].'</p>
                </div>
                <p>'.number_format($cart[5],0, ',', '.').'đ</p>
            </div>
        ';
            $i+=1;
        }

        
        echo '<div class="check-out-total">
                <p>Tổng cộng</p>
                <b>'.number_format($tong,0, ',', '.').'đ</b>
            </div>';
    }

    function bill_chi_tiet($listbill){
        global $img_path;
        $tong=0;
        $i=1;
        foreach ($listbill as $cart) {
            $hinh = $img_path.$cart['img'];
            $tong += $cart['thanhtien'];
            echo'<tr>
                    <td>'.$i.'</td>
                    <td><img src="'.$hinh.'" width="80px"></td>
                    <td>'.$cart['name'].'</td>
                    <td>'.number_format($cart['price'],0, ',', '.').'đ</td>
                    <td>'.$cart['soluong'].'</td>
                    <td>'.number_format($cart['thanhtien'],0, ',', '.').'đ</td>
                </tr>';
            $i+=1;
        }
        echo '<tr>
                    <th colspan="4">Tổng</th>
                    
                    <th colspan="2">'.number_format($tong,0, ',', '.').'đ</th>
                </tr>';
    }

    function tongdonhang(){
        $tong=0;
        $i=1;
        foreach ($_SESSION['mycart'] as $cart) {
            $tong+=$cart[5];
        }
        return $tong;
    }

    function insert_bill($iduser,$name,$email,$diachi,$sdt,$ngaydathang,$tongdonhang){
        $sql="insert into bill(iduser,bill_name,bill_email,bill_diachi,bill_sdt,ngaydathang,total) values('$iduser','$name','$email','$diachi','$sdt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $cart=pdo_query($sql);
        return $cart;
    }

    function loadall_cart_count($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $cart=pdo_query($sql);
        return sizeof($cart);
    }

    function loadall_bill($iduser=0){
        $sql="select * from bill  Where iduser = $iduser order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    
    function loadall_bill_admin($keyw="",$iduser=0){
        $sql="select * from bill where 1";
        if($iduser>0) $sql.=" AND iduser=".$iduser;
        if($keyw!="") $sql.=" AND id like '%".$keyw."%'";
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }

    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt="Đơn hàng mới";
                break;
            case '1':
                $tt="Đang xử lí";
                break;
            case '2':
                $tt="Đang giao hàng";
                break;
            case '3':
                $tt="Đã giao hàng";
                break;
            
            default:
                $tt="Đang cập nhật";
                break;
        }
        return $tt;
    }

    function delete_bill($id){
        $sql="delete from bill where id=".$id;
        pdo_execute($sql);
    }

    function update_bill($id,$status){
        $sql="update bill set bill_status='".$status."' where id=".$id;
        pdo_execute($sql);
    }


    function loadall_thongke(){
        $sql="select danhmuc.id_danhmuc as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice from sanpham left join danhmuc on danhmuc.id_danhmuc=sanpham.iddm group by danhmuc.id_danhmuc  order by danhmuc.id_danhmuc desc";
        $listthongke=pdo_query($sql);
        return $listthongke;
    }

?>