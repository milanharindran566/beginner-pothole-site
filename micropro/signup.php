<html>
<body>
<form action="signup1.php" method="POST">
<input type="text" name="name" placeholder ="Name">

<input type="password" name="id" placeholder ="Registration ID">
<input type="text" name="region" placeholder ="Region">

<input type="text" name="mail" placeholder ="Email Address">
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