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
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO produce (id,product_name,product_price,product_description) VALUES ('$id', 
            '$name','$price','$desc')";
             if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 
      
                echo nl2br("\n$id\n $name\n "
                    . "$name\n $desc");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
              
            // Close connection
            mysqli_close($conn);
            header("location:index.html");
            ?>
    