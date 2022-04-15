<?php

    function insert_binhluan_idpro($iduser, $idproduct, $name, $noidung, $ngay){
        $sql="INSERT INTO binhluan(iduser, idpro, name, noidung, ngay) VALUES('$iduser', '$idproduct','$name', '$noidung', '$ngay')";
        pdo_execute($sql);
    }

    

    function loadall_binhluan_idpro($idproduct){
        $sql="select * from binhluan where idpro='".$idproduct."' order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }

    function loadall_binhluan(){
        $sql="select * from binhluan order by id desc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }

    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }

?>