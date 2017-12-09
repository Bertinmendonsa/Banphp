<?php
require("dbconnection.php");
$query2 = "select * from doctors";
        $luka = mysqli_query($conn,$query2);
?>
<html>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <script src="js/jquery-1.12.3.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tbody>
                   <?php
                             while($row = mysqli_fetch_array($luka)){
                echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['banurl'].'</td><td>'.$row['fburl'].'</td><td><img src="images/doctors/'.$row['image'].'" alt="image" width="200px" heigh="200px"></td></tr>';
            }
                        ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>