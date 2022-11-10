<?php
$name = $_POST['name'];
$upass = $_POST['upass'];


include 'db.php';
$sql = "INSERT INTO m2(user,com2) VALUES ('$name','$upass')";
$result = mysqli_query($conn,$sql);

if($result){
    header('Location: m2.php');
}

?>
