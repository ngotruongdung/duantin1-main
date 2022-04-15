<section class="best-seller">
    <h3 class="heading">Best Seller</h3>
    <div class="product">
        <?php
            foreach ($dstop10 as $sp) {
                extract($sp);
                // $hinh=$img_path.$img;
                $linksp="index.php?act=product-detail&idsp=".$id;
                echo'
                <a href="'.$linksp.'" class="product-item">
                    <img src="'.$img.'" alt="this is picture">
                    <b>'.$name_sp.'</b>
                    <p>'.number_format($price,0, ',', '.').'đ</p>
                </a>

                ';
            }
        ?>
    </div>
</section>
<div class="banner-big">
    <img src="./images/banner-big.png" alt="">
</div>
<section class="new-product">
    <h3 class="heading">New Prouct</h3>
    <div class="product">
        <?php
            foreach ($spnew as $sp) {
                extract($sp);
                // $hinh=$img_path.$img;
                $linksp="index.php?act=product-detail&idsp=".$id;
                echo '
                <a href="'.$linksp.'" class="product-item">
                    <img src="'.$img.'" alt="this is picture">
                    <b>'.$name_sp.'</b>
                    <p>'.number_format($price,0, ',', '.').'đ</p>
                </a>
                    ';}
        ?>
    </div>
</section>
<section class="social">
    <h3 class="heading">Social Media</h3>
    <div class="social-img">
        <div>
            <figure>
                <img src="./images/social-img-1.png" />
            </figure>
        </div>
        <div>
            <figure>
                <img src="./images/social-img-2.png" />
            </figure>
        </div>
        <div>
            <figure>
                <img src="./images/social-img-3.png" />
            </figure>
        </div>
    </div>
</section>