<?php
    require('config.php');

    $id=$_GET["del_id"];
    $result=delete_sql("users", "id=$id");
        echo $result;
?>