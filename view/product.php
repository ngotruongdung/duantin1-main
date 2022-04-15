<section class="product-all">
    <div class="category">
        <h3>Danh Mục -</h3>
        <ul class="category-list">
            <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm="index.php?act=product&iddm=".$id_danhmuc;
                        echo'
                            <li><a href="'.$linkdm.'">'.$name.'</a></li>
                        ';
                    }
                ?>
        </ul>
        <h3>Màu Sắc -</h3>
        <div class="color-list">
            <a href="#" id="black">a</a>
            <a href="#" id="white">a</a>
            <a href="#" id="red">a</a>
            <a href="#" id="blue">a</a>
        </div>
        <ul>
            <li><a href="">Chính sách mua hàng</a></li>
            <li><a href="">Chính sách đổi trả</a></li>
            <li><a href="">Chính sách bảo mật</a></li>
            <li><a href="">Điều khoản dịch vụ</a></li>
        </ul>
    </div>
    <div class="product">
        <?php
            foreach ($dssp as $sp) {
                extract($sp);
               
                $linksp="index.php?act=product-detail&idsp=".$id;
                echo '
                <a href="'.$linksp.'" class="product-item">
                <img src="'.$img.'" alt="">
                <b>'.$name_sp.'</b>
                <p>'.number_format($price,0, ',', '.').'đ</p>
                </a>
                    ';
            }
        ?>
    </div>
</section>