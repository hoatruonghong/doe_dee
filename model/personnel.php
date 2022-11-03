<?php
/**
 * Model nhân sự
 */
function insert_nhansu($kieunhansu){
    $sql="insert into bmdt_human_personnel(position) values ('$kieunhansu')";
    pdo_execute($sql);
}
function delete_nhansu($id){
    $sql="delete from bmdt_human_personnel where id=".$id;
    pdo_execute($sql);
}
function loadAll_nhansu(){
    $sql="select * from bmdt_human_personnel order by id";
    return pdo_query($sql);
}
function loadOne_nhansu($id){
    $sql="select * from bmdt_human_personnel where id=".$id;
    return pdo_query_one($sql);
}
function update_nhansu($kieunhansu, $id){
    $sql="update bmdt_human_personnel set position='".$kieunhansu."'where id=".$id;
    pdo_execute($sql);                
}


?>