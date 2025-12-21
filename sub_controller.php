<?php
    
    require ("config.php");

    $sub_name=""; $sub_code=""; $st_id="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["sub_name"]!=""){
            $sub_name=$_POST["sub_name"];
        }
        if($_POST["sub_code"]!=""){
            $sub_code=$_POST["sub_code"];
        }
        if($_POST["type_id"]!=""){
            $st_id=$_POST["type_id"];
        }
    }

    $data_arr=[
        'subject_name'=>$sub_name,
        'subject_code'=>$sub_code,
        'subject_type_id'=>$st_id,
    ];

    $result=insert_sql("subjects",$data_arr);
        echo $result;
?>