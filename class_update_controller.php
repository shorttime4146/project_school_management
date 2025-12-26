<?php    
    require ("config.php");

    $tid=""; $cls=""; $sec=""; $sname=""; $ct=""; $cd=""; $up_id="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST["teacher_id"]!=""){
            $tid=$_POST["teacher_id"];
        }
        if($_POST["class_id"]!=""){
            $cls=$_POST["class_id"];
        }
        if($_POST["section"]!=""){
            $sec=$_POST["section"];
        }
        if($_POST["sub_name"]!=""){
            $sname=$_POST["sub_name"];
        }
        if($_POST["class_time"]!=""){
            $ct=$_POST["class_time"];
        }
        if($_POST["class_date"]!=""){
            $cd=$_POST["class_date"];
        }
        if($_POST["update_id"]!=""){
            $up_id=$_POST["update_id"];
        }
    }

    $data_arr=[
        'teacher_id'=>$tid,
        'class_id'=>$cls,
        'section_id'=>$sec,
        'subject_id'=>$sname,
        'class_time'=>$ct,
        'class_date'=>$cd
    ];
   

    $result=update_sql("class_schedule",$data_arr, $up_id);
        echo $result;
?>