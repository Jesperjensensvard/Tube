<?php
// include session_start
session_start();
//include db 
include "uploaddb.php";

// gloabal varibals for importans
$target_dir = "upload/";
$target_file = $target_dir . basename( mysqli_real_escape_string($db, $_FILES["video"]["name"]));
$target_file_image = $target_dir . basename( mysqli_real_escape_string( $db, $_FILES["image"]["name"]));

$uploadOk = 1;

// dataBaseValuesInsert
$videoUrl = basename( mysqli_real_escape_string( $db, $_FILES["video"]["name"]));
$imageURl = basename( mysqli_real_escape_string( $db, $_FILES["image"]["name"]));
$videoTitle = $_POST['title'];
$category = $_POST['cat'];
$description = $_POST['des'];
$views = 0 ;



$resultOfDataBase = $db->query("SELECT * FROM video");



$UserDataBaseResult = [];


 
if(mysqli_num_rows($resultOfDataBase)) 
{
    while($row = mysqli_fetch_assoc($resultOfDataBase)) {
        $UserDataBaseResult[] = $row;

        print_r($UserDataBaseResult);
       

        }
}

// Allow certain file formats
else if($_FILES["video"]["type"] != "video/mp4") {
 
 exit();
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
   && $imageFileType != "gif" ) {
    exit();
}


if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_image)) {

        if($insert = $db->query("INSERT INTO video (CategoryID,url,imgUrl,description,title,views) VALUES ('{$category}','{$videoUrl}', '{$imageURl}','{$description}', '{$videoTitle}', '{$views}') ")) {
            echo $db->affected_rows;

        echo "The file ". basename( $_FILES["video"]["name"]). " has been uploaded.";
    }
} 
else {
    echo "Sorry, there was an error uploading your file.";
}
?>






 