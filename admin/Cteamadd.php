<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    
    <style>
        .color{
        color: gray;
        }
        .color-require{
            color: red;
        }
        @media (min-width: 768px){
            .mrl{
                margin-left: 25%;
            } 
        }


    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require("adminnav.php"); ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Members(Clinical)</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="row">
          
            <div class="col-md-12">
                <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-stethoscope"></i><a style="margin-left:2%">Doctors detail</a></div>
        <div class="card-body">
            <form action="addmem.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                    <label>Name<span class="color-require">*</span></label>
                <input placeholder="name" class="form-control" name="name" id="name" required><br>
                <label>Designation/Role<span class="color-require">*</span></label>
                <input placeholder="Designation/Role" class="form-control" name="desig" id="desig" required><br>
                <label>URL(Bangalore Nethralaya)<span class="color-require">*</span></label>
                <input placeholder="BangaloreNethralayaURL" class="form-control" name="pageurl" id="url" required><br>
                <label>facebook URL<span class="color-require">*</span></label>
                <input placeholder="facebookURL" class="form-control" name="fb" required><br>
                <label>lindin URL<span class="color-require">*</span></label>
                <input placeholder="linkdinURL" class="form-control" name="linkdin" required><br>
                <label>twitter URL<span class="color-require">*</span></label>
                <input placeholder="twitterURl" class="form-control" name="twitter" required>
                    </div>
                    <div class="col-md-6">
                        <br>
            <table class="table table-striped">
                    <thead>
                        <tr><th>Services<span class="color-require">*</span></th><th>Yes</th><th>No</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cataract Service</td><td><input type="radio" name="cataract" value="true"></td><td><input type="radio" name="cataract" value="false" checked></td>
                        </tr>
                        <tr>
                            <td>Refractive Service</td><td><input type="radio" name="refractive" value="true"></td><td><input type="radio" name="refractive" value="false" checked></td></tr>
                        <tr>
                            <td>Glaucoma Service</td><td><input type="radio" name="glaucoma" value="true"></td><td><input type="radio" name="glaucoma" value="false" checked></td>
                        </tr>
                        <tr>
                            <td>Vitreo-Retinal service</td><td><input type="radio" name="vitreo" value="true"></td><td><input type="radio" name="vitreo" value="false" checked></td>
                        </tr>
                        <tr>
                            <td>Squint & Pediatric Service</td><td><input type="radio" name="squint" value="true"></td><td><input type="radio" name="squint" value="false" checked></td>
                        </tr>
                        <tr>
                            <td>Cornea & Contact lenses</td><td><input type="radio" name="cornea" value="true"></td><td><input type="radio" name="cornea" value="false" checked></td>
                        </tr>
                        <tr>
                            <td>Orbit & Occuloplasty</td><td><input type="radio" name="orbit" value="true"></td><td><input type="radio" name="orbit" value="false" checked></td>
                        </tr>
                    </tbody>
                </table>
                
                
                
                
                
                
                
                <label class="color">Choose your Photo</label>
                <input type="file" class="form-control" name="image" id="image" required>
                <br>
                    
                    </div>
                </div>
                
            <br>
                <input style="float:right" class="btn" type="submit" name="submit" id="insert" >
            </form> 
            
            
        </div>
        <div class="card-footer small text-muted">Date and Time <?php echo date("d/m/y h-i-sa") ; ?></div>
      </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
      
      
      
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
      <script src="js/custom.js"></script>
  </div>
</body>

</html>
