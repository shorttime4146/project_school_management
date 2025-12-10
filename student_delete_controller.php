<?php
    require('config.php');

    $id=$_GET["del_id"];
    $result=delete_sql("students", "id=$id");
        echo $result;
?>