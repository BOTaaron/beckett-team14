<?php


include 'connection.php';

if(isset($_POST['subUser'])){
    $id=$_POST['txtID'];
    $name=$_POST['txtName'];
    $pass=$_POST['txtPass'];
    
    
    $query = "INSERT INTO user    
            (userID, userName,userPass)
         VALUES
             ('$id', '$name', '$pass')";
            
            echo $query;
            exit();
            
            
            mysqli_query($connection, $query);
            
          // header('location:mysql.php');
}




?>
