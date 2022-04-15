<div class="list-product list-admin">
    <h3>DANH SÁCH DANH MỤC</h3>
    <table>
        <tr>
            <th>ID Danh Mục</th>
            <th>Tên Danh Mục</th>
            <th>Thao Tác</th>
        </tr>
        <?php
            foreach ($listdanhmuc as $danhmuc){
                extract($danhmuc);
                $suadm="index.php?act=editcategory&id=".$id_danhmuc;
                $xoadm="index.php?act=delcategory&id=".$id_danhmuc;
                echo '
                    <tr>
                    <td>CT-'.$id_danhmuc.'</td>
                    <td>'.$name.'</td>
                    <td>
                        <a href="'.$suadm.'" ><input type="button" value="Sửa" class="button-19"></a>
                        <a href="'.$xoadm.'"><input type="button" value="Xóa" class="button-19"></a>
                    </td>
                </tr>';
            }
        ?>
    </table>
</div>