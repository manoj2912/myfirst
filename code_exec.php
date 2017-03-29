

    <?php
    session_start();
    require_once('connect.php');
global $conn;
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mname=$_POST['mname'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $pic=$_POST['pic'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=INSERT INTO member(fname, lname, gender, address, contact, picture, username, password)VALUES('$fname', '$lname', '$mname', '$address', '$contact', '$pic', '$username', '$password')
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

    header("location: index.php?remarks=success");
    mysql_close($conn);
?>
