<?php
    try{
        $conn = new PDO('mysql:host=localhost:3307;dbname=php19220','root','');
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        if ( isset( $_POST['submit'] ) ) {
    
            $username = $_POST['username'];
            $password = $_POST['password'];
    

            if ($username && $password){
                $sql = "INSERT INTO users (username,password) VALUES (?,?)";
                $conn->prepare($sql)->execute([$username,$password]);
            }
        }
        
        header('Location: showUsers.php');
    
    }catch(PDOException $e){
        echo "Connection failed" .$e ->getMessage();
    
    }
?>