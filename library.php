<?php
$conn = mysqli_connect ("localhost", "root", "", "library");

if(!$conn){
    die ("No Connection");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM staff WHERE email = '$email' AND password = '$password' ";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0 ){
    header (Location: "login.html");
    exit();
} else {
    echo (Login Success);
}

mysqli_close($conn);

?>