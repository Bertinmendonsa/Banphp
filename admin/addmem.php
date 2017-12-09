<?php
require("dbconnection.php");
      
            $name = $_POST["name"];
            $desig = $_POST["desig"];
            $banUrl = $_POST["pageurl"];
            $fburl = $_POST["fb"];
            $ldurl = $_POST["linkdin"];
            $twurl = $_POST["twitter"];
            $cat = $_POST["cataract"];
            $refractive = $_POST["refractive"];
            $glaucoma = $_POST["glaucoma"];
            $vitreo = $_POST["vitreo"];
            $squint = $_POST["squint"];
            $cornea = $_POST["cornea"];
            $orbit = $_POST["orbit"];
            $filename = basename($_FILES["image"]["name"]);
            $target_dir = "images/doctors/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $query = "insert into doctors(name,desig,banurl,fburl,lnurl,twurl,cataract,refractive,glaucoma,vitreo,squint,cornea,orbit,image) values('$name','$desig','$banUrl','$fburl','$ldurl','$twurl','$cat','$refractive','$glaucoma','$vitreo','$squint','$cornea','$orbit','$filename')";
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif"&& $imageFileType != "JPG"  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        if(mysqli_query($conn,$query)){
            echo "Your details have been saved";
        }
        else{
            echo "faild to save in database";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


header("Location:/public_html/admin/Cteamadd.php");
            
          
          

            
      
?>
