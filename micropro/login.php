<html>
<body>
<form action="login1.php" method="POST">
<input type="password" name="id" placeholder ="Enter ID">



<button type="submit" name="submit">Submit</button>
</form>
<?php
session_start();
$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl,"submit=empty")==true){
    echo "<p>did not fill all fieds</p>";
    exit();
}
elseif(strpos($fullUrl,"submit=char")==true){
    
    echo "<p>invalid input</p>";
    exit();
}
elseif(strpos($fullUrl,"submit=success")==true){
    echo "<p>Login success</p>";
   // header("Location: http://localhost/random_php_files/asd/result.php?submit=success");
   foreach($_SESSION['result'] as $a){
    echo $a . "<br>";
    }
    exit();
}
?>
</body>
</html>