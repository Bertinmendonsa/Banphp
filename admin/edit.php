<?php

session_start();



$fname = $_SESSION["fname"];
$append ="content/$fname";
$text = $_POST['text'];
$myfile = fopen($append,"w+") or die("could not open the Document");
fwrite($myfile,$text);
//echo $text."<br>";
echo $fname;
fclose($myfile);

header("Location:/public_html/admin/tables.php");
die();
?>