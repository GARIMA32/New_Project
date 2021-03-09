<?php
      if($_SERVER['REQUEST_METHOD']=='POST')
      {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $current_balance=$_POST['current_balance'];


          // Connecting to the database
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
        

            $sql = "INSERT INTO `customer` ( `name`, `email`, `current_balance`) VALUES ( '$name', '$email', '$current_balance')";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Data has been inserted successfully!.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            else{
                // echo "This record has not been inserted because of this error -----> " .mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some error that why your data has been inserted successfully! we are sorry for this inconvenience.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            }

        /*     $sql= "SELECT * FROM customer ";
      $result = mysqli_query($conn,$sql);

      //Find the number of rows
      echo mysqli_num_rows($result); */
      }

      
      
    


  
?>

<!doctype html>
<html lang="en">
  <head>
 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Customer</title>
    <style>
    h1{
        font-size:16px;
    }
    .col-lg-4{
        margin-top:100px;
        margin-left:20px;
    }
    h2{
        margin-left:100px;
        color:#743653;
    }
    </style>

  </head>
  <body>
  <div class="container-fluid">
  
    <div class="row mt-5">
    <h2> <strong>Add Customers</strong> </h2>
    <div class="col-lg-4">

        
    
        <form action="list_customers.php" method="POST">
        
        <h1> ID no </h1>
        <input type="text" name="id" class="form-control"   disabled />
        
        <h1> Name </h1>
        <input type="text" name="name" class="form-control" placeholder="Enter Your Name"  />

        <h1> Email </h1>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />

        <h1> Current_Balance </h1>
        <input type="number" name="current_balance" class="form-control" placeholder="Enter Avalible Balance"  />
        
        <input type="submit" class="btn btn-block btn-success" name="insert" value="Add" />
        </form>
    </div>
    
    <div class="col-lg-8">
    
   
          
            
   
    
    </div>
    </div>
    </div>

  </body>
</html>
