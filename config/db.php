<?php
    $hostname ='http://www.todolist.local';
    $username = "root"; 
    $password = "root"; 
    $dbname ='TODOLIST';
     //   $conn = mysqli_connect($hostname,$username,$password,$database) or die("connection a la bdd échouer");
      //  $db = new PDO('mysql:hostname=localhost;dbname=TODOLIST',$username,$password ) or die("connection a la bdd échouer");
        try {
            $db = new PDO('mysql:hostname=http://www.todolist.local;dbname=TODOLIST',$username,$password );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
          echo "connection a la bdd échouer: ". $e->getMessage();
        }

?>