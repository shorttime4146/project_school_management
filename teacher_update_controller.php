<?php
    require('config.php');

    $fname=""; $lname=""; $eml=""; $phn=""; $up_id="";
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
        if($_POST["update_id"]!=""){
            $up_id=$_POST["update_id"];
        }
    }
     
    $dataArr=[
        'first_name'=>$fname,
        'last_name'=>$lname,
        'email'=>$eml,
        'phone'=>$phn
    ];
    $result=update_sql("teachers", $dataArr, "id=$up_id");
        echo $result;
?>