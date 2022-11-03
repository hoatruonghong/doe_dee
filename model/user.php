<?php
/**
 * Model account user
 */

function check_user($user, $pass){
    $sql="select * from bmdt_user where username = '".$user."' and password = md5('".$pass."') ";
    $result = pdo_query($sql);
    if (count($result) > 0) return $result[0]['status'];
    else return 0;
}
?>