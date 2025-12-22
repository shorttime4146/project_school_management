<?php
    require('config.php');

    $sub_name=""; $sub_code=""; $sub_type=""; $up_id="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["sub_name"]!=""){
           $sub_name=$_POST["sub_name"]; 
        }
        if($_POST["sub_code"]!=""){
           $sub_code=$_POST["sub_code"]; 
        }
        if($_POST["type_id"]!=""){
           $sub_type=$_POST["type_id"]; 
        }
        if($_POST["update_id"]!=""){
            $up_id=$_POST["update_id"];
        }
    }
     
    $dataArr=[
        'subject_name'=>$sub_name,
        'subject_code'=>$sub_code,
        'subject_type_id'=>$sub_type
    ];
    $result=update_sql("subjects", $dataArr, "id=$up_id");
        echo $result;
?>