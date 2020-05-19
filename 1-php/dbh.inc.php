<?php

$dbServername = "localhost";
$dbUsername ="root";
$dbPassword ="Silpa!123";
$dbName="phpcourses";
 
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


/*if($conn){
    if(isset($_POST['submit'])){
        $first = $_POST['first'];
        $last= $_POST['last'];
        $email=$_POST['email'];
        $uid = $_POST['uid'];
        $pwd= $_POST['pwd'];

        $sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd)
        VALUES('$first','$last,'$email','$uid','$pwd');";
        $res=mysqli_query($conn, $sql);
        if($res){
            echo "You have successfully signup";
        }
        else
        {
        echo "You have error";
        }
    }

    header("Location: ../index.php?signup=success");
}   */
      
?>
