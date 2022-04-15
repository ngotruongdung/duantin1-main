<div class="add-product main-admin">
    <h3>Thêm Sản Phẩm</h3>
    <form action="index.php?act=addpro" method="post" enctype="multipart/form-data">
        <select name="iddm" id="">
            <option value="0">Chọn Danh Mục</option>
            <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '

                             <option value="'.$id_danhmuc.'">'.$name.'</option>
                        ';
                    }
                ?>
        </select>
        <input type="text" name="" id="" disabled value="Auto">
        <input type="text" name="tensp" id="" placeholder="Tên sản phẩm">
        <input type="text" name="mausp" id="" placeholder="Màu sản phẩm">
        <input type="number" name="giasp" id="" placeholder="Giá Sản Phẩm">
        <input type="text" name="hinh" id="" placeholder="Link ảnh sản phẩm">
        <textarea name="mota" cols="30" rows="5"></textarea>
        <div class="btn">
            <input type="submit" value="Thêm Sản Phẩm" name="themmoi" class="button-19">
            <input type="reset" value="Reset" class="button-19">
            <a href="index.php?act=listpro"><input type="button" value="Danh sách" class="button-19"></a>
        </div>
    </form>
</div>