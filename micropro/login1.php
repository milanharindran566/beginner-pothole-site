<?php
//print_r($_POST);
include_once 'conn_off.php';
include_once 'conn.php';
$id1=$_POST['id'];
session_start();

if(1){
    if(empty($id1)){
        header("Location: http://localhost/random_php_files/asd/login.php?submit=empty");
        exit();
    }

    else{
        if( is_numeric($id1)){
            $sql =" SELECT * FROM officer where id='" . $id1 . "';";
            $res = array();
            $result = $connx->query($sql);
            $r_result = $result->fetch_assoc();
            $s = 0;
            if ($result->num_rows > 0) {
                $sql1 =" SELECT * FROM pothole WHERE pincode = " . $r_result['pincode'] . " ;";
                $result = $conn->query($sql1);
                while($row = $result->fetch_assoc()) {
                    $res[$s] = "Road : " . $row['road'] . " Landmark :  " . $row['landmark'] . " Potholes : " . $row['potholes'] . "Danger Level  : " . $row['danger_level'] . "Pincode :".$row['pincode']; 
                    $s += 1;
                }
                $_SESSION['result'] = $res;
                print_r($res);
                header("Location: http://localhost/random_php_files/asd/login.php?submit=success");
                exit(); 
            } else {
                $res[0]="0 results";
                $_SESSION['result'] = $res;

            }
            header("Location: http://localhost/random_php_files/asd/login.php?submit=char");
            exit(); }
            else{
                header("Location: http://localhost/random_php_files/asd/login.php?submit=char");
                exit(); 
            }
        
        
        }
    }
    ?>