<?php
//print_r($_POST);
include_once 'conn.php';
$road =$_POST['road'];
$landmark=$_POST['landmark'];
$holes =$_POST['holes'];
$dangerous =$_POST['dangerous'];
$pincode =$_POST['pincode'];

if(1){
 if(empty($road)||empty($landmark)||empty($holes)||empty($pincode)){
    header("Location: http://localhost/random_php_files/asd/report.php?submit=empty");
    exit();
}
else{
  
    if( !preg_match("/[^A-Za-z ]/",$road) && !preg_match("/[^A-Za-z ]/",$landmark) && is_numeric($holes) && is_numeric($dangerous) && is_numeric($pincode)){
        $sql ="INSERT INTO pothole(road, landmark, potholes, danger_level,pincode) VALUES('$road','$landmark',$holes,$dangerous,$pincode);";
        //echo $sql;
        mysqli_query($conn,$sql);
        header("Location: http://localhost/random_php_files/asd/report.php?submit=success");
        exit();
    }
    else{
        header("Location: http://localhost/random_php_files/asd/report.php?submit=char");
        exit(); 
    }
}
}/*else{
    header("Location: http://localhost/random_php_files/test9.php");
    exit();
}*/


?>