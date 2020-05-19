<?php
    include_once 'include/dbh.inc.php';
    //ini_set('mysql.connect_timeout',300);
    //ini_set('default-socket_timeout',300);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <h1>Hiii   Darling ..!!!</h1>
    <?php
    $sql = "SELECT * FROM posts1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['subject'] ."<br>";

        }
    }
    ?>
</body>
</html>