<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin - PolyStor</title>
    <link rel="icon" href="../images/icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../css/admin.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">PolyStor</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Trang Chủ</span>
        </a>
         <span class="tooltip">Trang Chủ</span>
      </li>
      <li>
       <a href="index.php?act=listuser">
         <i class='bx bx-user' ></i>
         <span class="links_name">Khách hàng</span>
       </a>
       <span class="tooltip">Khách hàng</span>
     </li>
     <li>
       <a href="index.php?act=listcmm">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Bình Luận</span>
       </a>
       <span class="tooltip">Bình Luận</span>
     </li>
     <li>
       <a href="index.php?act=listanalysis">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Thống Kê</span>
       </a>
       <span class="tooltip">Thống Kê</span>
     </li>
     <li>
       <a href="index.php?act=addcategory">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Danh Mục</span>
       </a>
       <span class="tooltip">Danh Mục</span>
     </li>
     <li>
       <a href="index.php?act=listbill">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Đơn Hàng</span>
       </a>
       <span class="tooltip">Đơn Hàng</span>
     </li>
     <li>
      <a href="index.php?act=addpro">
        <i class='bx bxs-shopping-bag-alt'></i>
        <span class="links_name">Sản Phẩm</span>
      </a>
      <span class="tooltip">Sản Phẩm</span>
    </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Quản trị viên</span>
       </a>
       <span class="tooltip">Quản trị viên</span>
     </li>
     <li class="profile">
       <div class="profile-details">
         <i class='bx bx-log-out' id="log_out" ></i>
           <div class="name_job">
             <div class="name">PolyStor</div>
             <div class="job">Group Five Poly</div>
           </div>
         </div>
     </li>
    </ul>
  </div>