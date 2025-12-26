<?php
    require('config.php');

    $id=$_GET["del_id"];
    $result=delete_sql("subjects", "id=$id");
        echo $result;
?>