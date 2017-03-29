<?php

require_once('connect.php');
global $conn;

$n = $_POST['name'];
$a = $_POST['password'];


echo "Name : ".$n."\n"."password : ".$a;

$res  = $conn->prepare("insert into event.user values(?,?)");
$res->bind_param("si",$n,$a);
$res->execute();

?>

<html>
<head>
<title>home</title>
</head>
<body>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
Name :
<input type ="text"  name = "name">
age : 
<input type = "number" name = "age">
<input type = "submit" value = "submit">



</form>

</body>
</html>
