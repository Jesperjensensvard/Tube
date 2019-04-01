<?PHP
include 'logindb.php';

$firstname = mysqli_real_escape_string( $db,  $_POST['firstname']);
$lastname = mysqli_real_escape_string( $db, $_POST['lastname']);
$userName = mysqli_real_escape_string( $db,  $_POST['username']);
$password = mysqli_real_escape_string( $db,  $_POST['password']);
$passwordcheck = mysqli_real_escape_string( $db,  $_POST['password-repeat']);
$email = mysqli_real_escape_string( $db,  $_POST['email']);
$country = mysqli_real_escape_string( $db, $_POST['country']);
$adress = mysqli_real_escape_string( $db, $_POST['adress']);
echo $firstname , $lastname , $userName , $password ,$passwordcheck,$email,$country,$adress;

$resultOfDataBase = $db->query("SELECT  firstname, lastname, username, password, email, FROM users");

$dataOfUserName = [];

if(mysqli_num_rows($resultOfDataBase)) 
{
    while($row = mysqli_fetch_assoc($resultOfDataBase)) {
         $dataOfUserName[] = $row;
          foreach ($dataOfUserName as $key) {
          
          
               if($userName == $key['username'] && $key['email'] == $email) {
               
                    header("location: ../register.php?error=userAlreadyexist=".$userName."&mail="); 
               exit(); 
               } 
               else if($userName == $key['UserName'])
               {
               header("location: ../register.php?error=userAlreadyexist=&mail"); 
               exit();
               }
               else if($key['Email'] == $userEmail) 
               {
               header("location: ../register.php?error=userAlreadyexist=uid=".$userName); 
               exit();
               }
          
          }
     }     
}

else if(empty($firstname) || empty($lastname) || empty($userName) || empty($password) || empty($email) || empty($country) || empty($adress)) {
     header("location: ../index.html");
     exit();
}

else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
     header("location: ../register.php?error=uid=".$userName."&NoValidEmail");
     exit();
}

else if(!preg_match("/^[a-zA-Z0-9]*$/", $userName))
{
     header("location: ../register.php?error=NoValidUsername=".$userName);
     exit();
}


else if ($password !== $passwordcheck) 
{
     header("location: ../register.php?error=PasswordRepetFaild=uid=".$userName);
     exit();
} else {

     $hasedPassowrd = password_hash($password, PASSWORD_BCRYPT);

     if($insert = $db->query("INSERT INTO users (firstname,lastname,username,password,email,country,adress) VALUES ('{$firstname}','{$lastname}','{$userName}', '{$password}','{$email}','{$country}','{$adress}') ")) {
          session_start();
          header("location: ../register.php?");  
          exit();
     }

}





?>