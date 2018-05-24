<?php

include 'database.php';

if(!empty($_POST['username']) && !empty($_POST['email'])){
    $email = $_POST['email'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $username = $_POST['username'];
    $phone_number = $_POST['phone_number'];
    $description = $_POST['description'];
    $home_address = $_POST['home_address'];
    $password = md5($_POST['password']);

    if($_POST['gender']===1)
    {
        $gender = "Male";
    }elseif ($_POST['gender']===2){
        $gender = 'Female';
    }else{
        $gender = 'Nothing';
    }
    
    $status = '0';
    $sql = "INSERT INTO Users(username, password, first_name, last_name, gender, email, phone_number, home_address, description) 
            VALUES('$username', '$password','$first_name', '$last_name', '$gender', '$email', '$phone_number', '$home_address', '$description')";

    if(mysqli_query($conn, $sql) === TRUE){
        echo 'All inserted';
    }else{
        echo 'insert';
    }
}

?>