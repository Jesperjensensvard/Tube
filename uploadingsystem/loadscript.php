<?php
//include db 

include "uploaddb.php";

// gloabal varibals for importans
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


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
else if($_FILES["fileToUpload"]["type"] != "video/mp4") {
 
 exit();
}


if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        if($insert = $db->query("INSERT INTO video (UserName,Email,Password,Role) VALUES ('{$userName}','{$userEmail}','{$hasedPassowrd}', '{$defultAdnimpostion}') ")) {
            echo $db->affected_rows;

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }
} 
else {
    echo "Sorry, there was an error uploading your file.";
}
?>






 