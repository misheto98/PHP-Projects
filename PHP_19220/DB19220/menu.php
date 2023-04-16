<header>
        <aside>
            <nav>
                <div class="nav-links">
                    <a href="index.php">Home</a>
                    <?php
if ( isset( $_SESSION['user'] ) ) {
?>
                    <a href="profile.php" style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><?= $_SESSION['user']['username'] ?></a>
<?php
} else {
?>
                    <a href="login.php">Log in</a>

<?php
}
?>
<?php

if ( isset( $_SESSION['user'] ) ) {
?>

           <a href="logout.php">Logout</a>
           <a href="showUsers.php">Users</a>


<?php
} else {

?>

          <a href="register.php">Register</a>
                   

<?php
}
?>

                </div>
            </nav>
        </aside>


    </header>
    <br><br><br>

    <?php

if ( isset( $_SESSION['user'] ) ) {
    ?>
    <h1> Welcome to your page, <?= @$_SESSION['user']['username'] ?></h1>

  <?php
}
?>
  




