<?php 
    if(isset($_POST['submit'])){
     
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo $password;

  }

?>

<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP FUN FORM </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>

      <form action='form.php' method='POST'>
        <label for="username">Username : </label>
        <input type="text" name="username" placeholder=" username..">
        <br>
        <label for="password">Password : </label>
        <input type="password" name="password" placeholder="pw">

        <input type="submit"></input>

      </form>
    

  </body>
</html>