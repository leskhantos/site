<?php
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $con = mysqli_connect("localhost","root","","loginform");
    $result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' and  password ='$pass'");
    $row=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);

    if($row['username']=='admin' && $row['password']=='123456'){
        echo "logged";
    }else if($username==''||$pass==''){
        echo "empty";
    }else{
        echo "notLogged";
    }
}