<?php
    
    require ("config.php");

    $fname=""; $lname=""; $eml=""; $phn="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["first_name"]!=""){
            $fname=$_POST["first_name"];
        }
        if($_POST["last_name"]!=""){
            $lname=$_POST["last_name"];
        }
        if($_POST["email"]!=""){
            $eml=$_POST["email"];
        }
        if($_POST["phone"]!=""){
            $phn=$_POST["phone"];
        }
    }

    $data_arr=[
        'first_name'=>$fname,
        'last_name'=>$lname,
        'email'=>$eml,
        'phone'=>$phn,
    ];

    $result=insert_sql("users",$data_arr);
        echo $result;
?>