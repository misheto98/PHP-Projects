<?php
session_start();
?>


<?php
try {
  $conn = new PDO('mysql:host=localhost:3307;dbname=php19220', 'root', '');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";

  $query = "SELECT * FROM users";
  $PDOstatement = $conn->prepare('SELECT * FROM users');
  $PDOstatement->execute();
  $result = $PDOstatement->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  echo "Connection failed" . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>showUsers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styleHomePage.css">

</head>

<body>
  <?php include("menu.php") ;?>



  <!-- <form action="addInDb.php" method="post">
    <label for="name">Username:</label>
    <input type="text" name="username" id="name"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" name="submit" class="btn btn-success"><br><br>

  </form> -->

  <table class="table table-warning table-striped">
    <!-- table-success  -->
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Delete</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>

    <?php

    for ($i = 0; $i < count($result); $i++) {
      echo "<tr>";
      echo   "<td>" . $result[$i]['id'] . "</td>";
      echo   "<td>" . $result[$i]['username'] . "</td>";
      echo   "<td>" . $result[$i]['password'] . "</td>";
      echo   '<td><a class="btn btn-danger" href="deleteUser.php?id=' . $result[$i]['id'] . '">Delete</a></td>';
      echo   '<td><a class="btn btn-warning" href="edit.php?id=' . $result[$i]['id'] . '">Edit</a></td>';
      echo "</tr>";
    }
    ?>

  </table>
</body>

</html>