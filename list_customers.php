

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<div class="header">
    

    <div class="container">
        <div class="navbar ">
           
            <div class="logo">
                <img src="image/image1.png" width="180px">
                
            </div>
            <nav>
                <p><b> Digital Banking<b></p>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a href="transection.php">Transection</a></li>
                    
                    <!-- <li><p>&#10148;</p></li> -->
                </ul>
            </nav>
            
        </div>
     
        
</div>
</div>   
<hr>
<div class="container2">
            <?php
            $dbhost='localhost';
            $dbname='banking';
            $dbusername='root';
            $dbpass='';

            // create a connection
            $conn = mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);
            //die if connection will not connected
            if(!$conn){
                die("Sorry we failed to connect :" .mysqli_connect_error());
            }
            else{
        

                $sql = "SELECT * FROM customer";
                $result = mysqli_query($conn,$sql);

                // $num =  mysqli_num_rows($result);
                // // echo $num;
                echo '<table border="1"  align="center" height="80%" width="60%" >
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
                
                </tr>
                ';
                

                if(mysqli_num_rows($result) >0)
                {
                    // $row = mysqli_fetch_assoc($result);
                    // echo var_dump($row);
                    // echo "<br>";
                    // $row = mysqli_fetch_assoc($result);
                    // echo var_dump($row);
                    // echo "<br>";

                    while($row = mysqli_fetch_assoc($result)){        

                    echo "<tr>";
                    echo "<td>".$row['id']. "</td>";
                    echo "<td>".$row['name']. "</td>";
                    echo "<td>".$row['email']. "</td>";
                    echo "<td>".$row['current_balance']. "</td>";
                    
                    echo "</tr>";
                }
            
            }
        }
               

?>
</div>
       

      
                
</body>
</html>