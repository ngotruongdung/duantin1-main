<div class="box-banner">
    <div class="box">
        <img src="./images/banner/1.png" alt="" width="100%">
    </div>
</div>
<section class="tuyendung">
    <h3 class="heading">Liên Hệ Tuyển Dụng</h3>
    <form action="index.php?act=tuyendung" method="post">
        <input type="text" name="ten" id="" placeholder="Họ và tên">
        <input type="text" name="sdt" id="" placeholder="Số Điện Thoại">
        <input type="text" name="email" id="" placeholder="Email">
        <input type="text" name="diachi" id="" placeholder="Địa Chỉ">
        <input type="date" name="" id="" placeholder="Ngày hẹn phỏng vấn">
        <select name="vitri" id="">
            <option value="0">Vị trí ứng tuyển</option>
            <option value="1">Nhân Viên Bán Hàng</option>
            <option value="2">Trưởng Kho Hàng Hóa</option>
            <option value="3">Quản Lí Cửa Hàng</option>
        </select>
        <textarea name="mota" id="" cols="30" rows="10" placeholder="Mô tả bản thân"></textarea>
        <!-- <button type="submit" name="dangki"><i class='bx bx-send'></i> Gửi</button> -->
        <input type="submit" value="Đăng Kí" name="tuyendung">
    </form>
</section>