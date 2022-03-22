<?php
    

    $dbhost = '127.0.0.1:3307';
    $dbName = 'cartgeek';
    $dbUsername = 'root';
    $dbpassword = '';
    
    $conn  = mysqli_connect($dbhost,$dbUsername,$dbpassword,$dbName);
    if (!$conn){
        die('Connection Failed: '.mysqli_connect_error());
    }
    $id =  $_REQUEST['id'];
    $sql= "DELETE FROM `produce` WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        echo "<h3>data has been removed from the database" 
            . " Please browse your localhost php my admin" 
            . " to view the updated data</h3>"; 

      
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
      
    // Close connection
    mysqli_close($conn);
    header("location:index.html");
?>