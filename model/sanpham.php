<?php

    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
        $sql="insert into sanpham(name_sp,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql="delete from sanpham where id=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham($keyw="",$iddm=0){

        $sql="select * from sanpham where 1";
        if($keyw!=""){
            $sql.=" and name_sp like '%".$keyw."%'";
        }

        if($iddm>0){
            $sql.=" and iddm='".$iddm."'";
        }

        $sql.=" order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadall_sanpham_home(){
        $sql="select * from sanpham where 1 order by id desc limit 0,12";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }


    function loadall_sanpham_top10(){
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,8";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function loadone_sanpham($id){
        $sql="select * from sanpham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function loadten_dm($iddm){
        if($iddm>0){
            $sql="select * from danhmuc where id_danhmuc=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        } else {
            return "";
        };
        
    }

    function load_sanpham_cungloai($id,$iddm){
        $sql="select * from sanpham  where iddm=".$iddm." AND id <> ".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    
    function update_sanpham($tensp, $giasp, $hinh, $mota, $iddm, $id){
        if($hinh!=""){
            $sql="update sanpham set iddm='" .$iddm. "', name_sp='" .$tensp. "', price='" .$giasp. "', mota='" .$mota. "', img='" .$hinh. "' where id=".$id;
        } else {
            $sql="update sanpham set iddm='" .$iddm. "', name_sp='" .$tensp. "', price='" .$giasp. "', mota='" .$mota. "' where id=".$id;
        }
        pdo_execute($sql);
    }
    
// function update_sanpham($tensp, $giasp, $hinh, $mota, $iddm, $id)
// {
//     if ($hinh != "") {
//         $sql = "update sanpham set name_sp='" . $tensp . "',price='" . $giasp . "',img='" . $hinh . "',mota='" . $mota . "',iddm='" . $iddm . "' where id=" . $id;
//     } else {
//         $sql = "update sanpham set name_sp='" . $tensp . "',price='" . $giasp . "',mota='" . $mota . "',iddm='" . $iddm . "' where id=" . $id;
//     }
//     pdo_execute($sql);
// }


?>