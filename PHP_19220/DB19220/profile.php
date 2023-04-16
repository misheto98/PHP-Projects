<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS BLOCK</title>
    <style>
        *{
    box-sizing: border-box;
    

}

.container{
    margin: auto;
    width: 20%;
    height: auto; 
    margin-top: 100px;
    text-align: center;
    border: 1px solid rgb(220,220,220);
    border-radius: 5px;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .container:hover{
        box-shadow: 0 10px 8px 0 rgba(0, 0, 0, 0.3);
        


    }

.container img{
    display: block;
    width: 30%;
    margin: -55px auto 0 auto;
    border-radius:50px;
    border: 5px solid white;
    box-shadow: 8px 8px 6px 0 rgba(0, 0, 0, 0.2);
}

.content{
    padding: 0 20px ;
}

.content h3{
    text-transform: uppercase;
}


    </style>
  

</head>
<body>

    <div class="container">

    <?php

    if ($_SESSION['user']['gender'] == 'female'){
        ?>

        <img src="image/var.jpg" alt="Profil image">
        <?php
        }else{
            ?>
       <img src="image/manavatar.png" alt="Profil image">

       <?php
        }

        ?>


        <div class="content">
            <h3><?= $_SESSION['user']['username'] ?></h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni tempora quidem laborum aliquid aliquam perferendis
             mollitia, repudiandae voluptatibus qui quod et temporibus dolor quia saepe rem voluptates rerum adipisci magnam.</p>

        </div>


    </div>

    