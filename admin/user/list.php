<div class="list-user list-admin">
    <h3>DANH SÁCH TÀI KHOẢN</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>Số DT</th>
            <th>Role</th>
            <th></th>
        </tr>
        <?php
            foreach ($listtaikhoan as $taikhoan){
                extract($taikhoan);
                $xoatk="index.php?act=deluser&id=".$id;
                echo '
                    <tr>
                    <td>'.$name.'</td>
                    <td>'.$user.'</td>
                    <td>'.$email.'</td>
                    <td>'.$diachi.'</td>
                    <td>'.$sdt.'</td>
                    <td>'.$role.'</td>
                    <td>
                        <a href="'.$xoatk.'"><input type="button" value="Xóa" class="button-19"></a>
                    </td>
                </tr>';
            }
        ?>
    </table>
</div>