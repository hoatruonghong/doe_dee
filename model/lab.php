<?php
/**
 * Model phòng thí nghiệm
 */
function insert_lab($name, $address, $teacher, $image, $description, $subject){
    if(! $subject){
        $subject = "";
    }
    if(! $description){
        $description = "";
    }
    $sql="insert into bmdt_lab(name, address, teacher, subject, description, image) values ('$name','$address','$teacher','$subject','$description','$image')";
    pdo_execute($sql);
}
function delete_lab($id){
    $sql="delete from bmdt_lab where id=".$id;
    pdo_execute($sql);
}
function loadAll_lab(){
    $sql="select * from bmdt_lab order by id";
    return pdo_query($sql);
}
function loadOne_lab($id){
    $sql="select * from bmdt_lab where id=".$id;
    return pdo_query_one($sql);
}
function update_lab($ten, $diadiem, $giaovien, $monhoc, $mota, $hinh, $id){
    $sql="update bmdt_lab set name='".$ten."',  address ='".$diadiem."', teacher ='".$giaovien."', subject ='".$monhoc."' , description ='".$mota."'";    
    if($hinh){
        $sql.=", image ='".$hinh."'";
    }   
    $sql.=" where id=".$id;
    pdo_execute($sql);                
}
function update_lab_status($id, $status){
    $sql="update bmdt_lab set status = '".$status."' where id=".$id;
    pdo_execute($sql);                
}
/**
 * Model hình ảnh phòng thí nghiệm
 */
function insert_lab_image($hinh){
    $sql="insert into bmdt_lab_image(image) values ('".$hinh."')";
    pdo_execute($sql);
}
function delete_lab_image($id){
    $sql="delete from bmdt_lab_image where id=".$id;
    pdo_execute($sql);
}
function loadAll_lab_image(){
    $sql="select * from bmdt_lab_image order by id desc";
    return pdo_query($sql);
}
function loadOne_lab_image($id){
    $sql="select * from bmdt_lab_image where id=".$id;
    return pdo_query_one($sql);
}
?>