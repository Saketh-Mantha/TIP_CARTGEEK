<?php
   

    $dbhost = '127.0.0.1:3307';
    $dbName = 'cartgeek';
    $dbUsername = 'root';
    $dbpassword = '';
    
    $conn  = mysqli_connect($dbhost,$dbUsername,$dbpassword,$dbName);
    if (!$conn){
        die('Connection Failed: '.mysqli_connect_error());
    }
    $table = "CREATE TABLE Produce (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR(30) NOT NULL,
        product_price VARCHAR(30) NOT NULL,
        product_description VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    
    $sql = "INSERT INTO produce(id,product_name,product_price,product_description)
    VALUES ('1', 'glasses', '$6.99','sunglasses with UV-protective plastic chain')";
    $sel = "";
    if ($conn->query($table) === TRUE) {
        echo "Table MyGuests created successfully";
      } else {
        echo "Error creating table: " . $conn->error;
      }
      
    if($table = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($table) > 0){
            while ($row = mysqli_fetch_array($table)){
                $id = $row['id'];
                $name = $row['product_name'];
                $price = $row['product_price'];
                $desc=$row['product-description'];
                $data = array("$id", "$name", "$price", "$desc");
                print_r(json_encode($data));
                
            }
        }
    }
?>