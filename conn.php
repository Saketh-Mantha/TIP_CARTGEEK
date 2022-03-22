<?php
    

    $dbhost = '127.0.0.1:3307';
    $dbName = 'cartgeek';
    $dbUsername = 'root';
    $dbpassword = '';
    
    $conn  = mysqli_connect($dbhost,$dbUsername,$dbpassword,$dbName);
    if (!$conn){
        die('Connection Failed: '.mysqli_connect_error());
    }
    $stmt = $conn->prepare("SELECT * FROM produce");
//  $stmt->bind_param("s", $obj->limit);
 $stmt->execute();
 $result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
$sql = "INSERT INTO produce(id,product_name,product_price,product_description)
VALUES (id.value, 'glasses', '$6.99','sunglasses with UV-protective plastic chain')";
   
    // $sql = "SELECT * FROM produce";
    // if($table = mysqli_query($conn,$sql)){
    //     if(mysqli_num_rows($table) > 0){
    //         while ($row = mysqli_fetch_array($table)){
    //             $id = $row['id'];
    //             $name = $row['product_name'];
    //             $price = $row['product_price'];
    //             $desc=$row['product_description'];
    //             $data = array("$id", "$name", "$price", "$desc");
    //             echo json_encode($data);
                
                
    //         }
    //     }
    // }
?>