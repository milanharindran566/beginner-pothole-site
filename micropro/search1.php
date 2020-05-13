<?php
//print_r($_POST);
include_once 'conn.php';
$landmark1=$_POST['landmark'];
session_start();
if(1){
    if(empty($landmark1)){
        header("Location: http://localhost/random_php_files/asd/search.php?submit=empty");
        exit();
    }
    else{
        if( !preg_match("/[^A-Za-z ]/",$landmark1)){
            $sql =" SELECT * FROM pothole where landmark='" . $landmark1 . "';";
            $res = array();
            $s = 0;
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $res[s] = "Road : " . $row['road'] . " Landmark :  " . $row['landmark'] . " Potholes : " . $row['potholes'] . "Danger Level  : " . $row['danger_level'] . "Pincode :" . $row['pincode']; 
                    $s += 1;
                }
                $_SESSION['result'] = $res;
            } else {
                $res[0]="0 results";
                $_SESSION['result'] = $res;

            }
            header("Location: http://localhost/random_php_files/asd/search.php?submit=success");
            exit(); }
            else{
                header("Location: http://localhost/random_php_files/asd/search.php?submit=char");
                exit(); 
            }
        
        
        }
    }
    ?>
      