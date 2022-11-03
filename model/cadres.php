<?php
/**
 * Model cán bộ
 */
function insert_canbo($nhansu_id, $hoten,$chucvu, $hinh, $phonglamviec, $email, $linhvuc, $phone, $degree, $file, $description, $research){
    $sql="insert into bmdt_human_cadres(name, image, position, lab, personnelID, email, major, phone, degree, file, description, research) values ('$hoten', '$hinh', '$chucvu', '$phonglamviec', '$nhansu_id', '$email', '$linhvuc', '$phone', '$degree', '$file', '$description', '$research')";
    pdo_execute($sql);
}
function delete_canbo($id){
    $sql="delete from bmdt_human_cadres where id=".$id;
    pdo_execute($sql);
}
function loadAll_canbo(){
    $sql="select * from bmdt_human_cadres order by id";
    return pdo_query($sql);
}
function loadAllInNhansu_canbo($nhansu_id){
    $sql="select * from bmdt_human_cadres where personnelID=".$nhansu_id."";
    return pdo_query($sql);
}
function loadOne_canbo($id){
    $sql="select * from bmdt_human_cadres where id=".$id;
    return pdo_query_one($sql);
}
function update_canbo($hoten,$chucvu, $hinh, $phonglamviec, $email, $linhvuc, $phone, $degree, $file, $description, $id){
    $sql="update bmdt_human_cadres set hoten ='".$hoten."'";    
    if($chucvu) {
        $sql.=", chucvu ='".$chucvu."'";
    }
    if($hinh){
        $sql.=", hinh ='".$hinh."'";
    }
    if($phonglamviec){
        $sql.=", phonglamviec ='".$phonglamviec."'";
    } 
    if($email){
        $sql.=", email ='".$email."'";
    }
    if($linhvuc){
        $sql.=", linhvuc ='".$linhvuc."'";
    }   
    $sql.=" where id=".$id;
    pdo_execute($sql);               
}
function get_num_teacher(){
    $total = pdo_query_value("SELECT count(*)FROM bmdt_human_cadres");
    return ceil((int)$total);
    
}
?>