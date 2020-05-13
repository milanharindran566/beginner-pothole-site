<?php
//print_r($_POST);
include_once 'conn_off.php';
$name =$_POST['name'];
$id=$_POST['id'];
$region =$_POST['region'];
$mail =$_POST['mail'];
$pincode =$_POST['pincode'];

if(1){
 if(empty($name)||empty($id)||empty($region)||empty($mail)||empty($pincode)){
    header("Location: http://localhost/random_php_files/asd/signup.php?submit=empty");
    exit();
}
else{
  
    if( !preg_match("/[^A-Za-z ]/",$name) && !preg_match("/[^A-Za-z@0-9. ]/",$mail) && is_numeric($id) && !preg_match("/[^A-Za-z ]/",$region) && is_numeric($pincode)){
        $sql ="INSERT INTO officer(name1, id, region, mail,pincode) VALUES('$name',$id,'$region','$mail','$pincode');";
        //echo $sql;
        //exit();
        mysqli_query($connx,$sql);
        header("Location: http://localhost/random_php_files/asd/signup.php?submit=success");
        exit();
    }
    else{
        header("Location: http://localhost/random_php_files/asd/signup.php?submit=char");
        exit(); 
    }
}
}/*else{
    header("Location: http://localhost/random_php_files/test9.php");
    exit();
}*/


?>