<html>
<body>
<form action="search1.php" method="POST">
<input type="text" name="landmark" placeholder ="Landmark">
<button type="submit" name="submit">Submit</button>
</form>
<?php
session_start();
$fullUrl1="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl1,"submit=empty")==true){
    echo "<p>did not fill all fieds</p>";
    exit();
}
else if(strpos($fullUrl1,"submit=char")==true){
    
    echo "<p>invalid input</p>";
    exit();
}
else if(strpos($fullUrl1,"submit=success")==true){
    echo "<p>Search complete</p>";
    foreach($_SESSION['result'] as $a){
        echo $a;
    }
    exit();
}

?>
</body>
</html>