<?php
include 'db_connect.php';


  $q =  "SELECT * FROM `product_details`;";
  $run = mysqli_query($con, $q);
  $html = "";
  
  if(mysqli_num_rows($run)>0){
      while($row = $run->fetch_assoc()){
          $html = $html. "<tr><td>" 
                    . $row["id"] . 
                    "</td><td>" 
                    . $row["product_name"] . 
                    "</td><td>". 
                    $row["price"].
                    "</td><td>".
                    $row["quantity"].
                    "</td><td>".
                    '<a class="btn btn-lg btn-block btn btn-info" href="5.php?id=' . $row["id"] .'"> Update</a> '.
                    
                    '<a class="btn btn-lg btn-block btn btn-danger" onclick="f('. $row["id"] .')"> Delete</a>'.
                   "</td></tr>";
    
      }
  }  


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Documents</title>
    <link rel = "icon" href="img/fav.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    
   
    
    

    <div class="p-4">
    
    
        <table class="table table-dark">

        <thead>
            <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                        
                        
            </tr>
        </thead>
            
        <tbody>
                <?php
                echo  $html;
                ?>
            </tbody>
            
        
        </table>
        </div>


   </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
    <script> 
        function f($id){
        if (confirm("Are you sure?") == true) {
            link="4.php?id="+$id;
            location.href = link;
        } 
    }
        
    
    </script>
    <script src="https://use.fontawesome.com/2c7ebecd35.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
