<div class="list-product list-admin">
    <h3>DANH SÁCH  COMMENT</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Nội Dung</th>
            <th>ID User</th>
            <th>ID Pro</th>
            <th>Ngày</th>
            <th>Thao Tác</th>
        </tr>
        <?php
            foreach ($listbinhluan as $binhluan){
                extract($binhluan);
                $xoabl="index.php?act=delcmm&id=".$id;
                echo '
                    <tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$iduser.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$ngay.'</td>
                    <td>
                        <a href="'.$xoabl.'"><input type="button" value="Xóa" class="button-19"></a>
                    </td>
                </tr>';
            }
        ?>
    </table>
</div>