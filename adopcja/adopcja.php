<?php
 $valid = true;
 $studioIdError = $studioNameError = $studioAddressError = $studioPCodeError = $studioTelNoError = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     if(empty($_POST["studioId"])){
         $studioIdError = " *This Field Cannot Be Empty";
         $valid = false;
     }
     if(empty($_POST["studioName"])){
         $studioNameError = " *This Field Cannot Be Empty";
         $valid = false;
     }
     if(empty($_POST["studioAddress"])){
         $studioAddressError = " *This Field Cannot Be Empty";
         $valid = false;
     }
     if(empty($_POST["studioPCode"])){
         $studioPCodeError = " *This Field Cannot Be Empty";
         $valid = false;
     }
     if(empty($_POST["studioTelNo"])){
         $studioTelNoError = " *This Field Cannot Be Empty";
         $valid = false;
     }
 }
?>