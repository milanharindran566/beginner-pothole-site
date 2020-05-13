<html>
<body>
<form action="report1.php" method="POST">
<input type="text" name="road" placeholder ="Road">

<input type="text" name="landmark" placeholder ="Landmark">
<input type="text" name="holes" placeholder ="Number">

<input type="text" name="dangerous" placeholder ="Dangerous">
<input type="text" name="pincode" placeholder ="Pincode">

<button type="submit" name="submit">Submit</button>
</form>
<?php
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
    echo "<p>Success</p>";
    exit();
}
?>
</body>
</html>