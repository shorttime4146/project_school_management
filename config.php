<?php
    function database_connection($db_name){
        $server="localhost";
        $user="root";
        $pass="";
        $database=$db_name;
        $conn=new mysqli($server, $user, $pass, $database);
        if($conn->connect_error){
            return"Database Connection Failed.".$conn->connect_error;
        }else{
            return $conn;
        }
    }
    $db_conn=database_connection("school_management");

    function insert_sql($table_name, $dataArr){
        session_start();
        global $db_conn;
        
        foreach($dataArr as $key=>$val){
            $column[]=$key;
            $value[]="'".$val."'";
        }
        $col_str=implode(",",$column);
        $val_str=implode(",",$value);

        $sql="insert into $table_name($col_str) value($val_str)";
        if($db_conn->query($sql)==1){
            //header("Location:all_user_view.php");
            //header("Location:all_student_view.php");
            //header("Location:all_teacher_view.php");
            //header("Location:all_subject_view.php");
            return"successfull";
        }else{
            return"Error.</br>".$db_conn->error;
        }
        /*$data_obj=$db_conn->query($sql);  
        if($data_obj>0){

            $insert_last_id = mysqli_insert_id($db_conn);         
                // $sql="select * from resigter where user_name='$u_name' and password=$pass";
            $sql="select * from users where id=$insert_last_id"; 
            $data_obj=$db_conn->query($sql);
            $data_arr=$data_obj->fetch_assoc(); 

            if($data_obj->num_rows>0){
                $_SESSION["user_id"]=$data_arr["id"];
                $_SESSION["first_name"]=$data_arr["first_name"];
                $_SESSION["last_name"]=$data_arr["last_name"];
                $_SESSION["email"]=$data_arr["email"];
                $_SESSION["phone"]=$data_arr["phone"];

                //header("Location:all_user_view.php?id=".$data_arr["id"]);
                header("Location:all_student_view.php");
                //return"successfull";
            }else{
                return $sql;
            }
        }else{
            echo"Error.</br>".$db_conn->error;
        }*/
    }

    function select_sql($table_name, $column="*", $wherecon="1"){
        global $db_conn;

        $sql="select $column from $table_name where $wherecon";
        $data=$db_conn->query($sql);

        foreach($data as $row){
            $dataArr[]=$row;
        }
        return $dataArr;
    }

    function update_sql($table_name, $data_arr, $wherecon="1"){
        global $db_conn;

        foreach($data_arr as $key=>$val){
            $data[]=$key ."='" .$val ."'";
        }
        $val_str=implode(",",$data);
        $sql="update $table_name set $val_str where $wherecon";

        if($db_conn->query($sql)==1){
            //header("Location:all_user_view.php");
            //header("Location:all_student_view.php");
            header("Location:all_teacher_view.php");
        }else{
            return"Update Data Failed.</br>".$db_conn->error;
        }
    }

    function delete_sql($tabale_name, $whereCond="1"){
        global $db_conn;

        $sql="delete from $tabale_name where $whereCond";
        $data=$db_conn->query($sql);

        if($db_conn->affected_rows>0){
            //header("Location:all_user_view.php");
            //header("Location:all_student_view.php");
            header("Location:all_teacher_view.php");
        }else{
            return $sql;
        }
    }
?>