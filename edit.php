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
    $name = $_REQUEST['name'];
    $price =  $_REQUEST['price'];
    $desc = $_REQUEST['description'];
    $sql="UPDATE `produce` SET `id`='$id',`product_name`='$name',`product_price`='$price',`product_description`='$desc' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        echo "<h3>data has been Updated succesfully database" 
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