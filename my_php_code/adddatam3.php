<?php
$name = $_POST['name'];
$upass = $_POST['upass'];


include 'db.php';
$sql = "INSERT INTO m3(user,com3) VALUES ('$name','$upass')";
$result = mysqli_query($conn,$sql);

if($result){
    header('Location: m3.php');
}

?>
