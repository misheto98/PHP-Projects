<?php
    try{
        $conn = new PDO('mysql:host=localhost:3307;dbname=php19220','root','');
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        
    
        $delete_id = $_GET['id'];
        if ( $delete_id ) {
            $sql = "DELETE FROM users WHERE id = ?";
                $conn->prepare($sql)->execute([$delete_id]);

        }
    
         
        header('Location: showUsers.php');
        
    }catch(PDOException $e){
        echo "Connection failed" .$e ->getMessage();
    
    }
?>