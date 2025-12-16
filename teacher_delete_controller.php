<?php
    require('config.php');

    $id=$_GET["del_id"];
    $result=delete_sql("teachers", "id=$id");
        echo $result;
?>