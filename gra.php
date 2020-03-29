<?php
session_start();
unset($_SESSION['film']);
if((!isset($_SESSION['zalogowany'])) && (!$_SESSION['zalogowany']==true)){
    header("Location: index.php");
    exit();
}
?>

<html lang="pl">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<style>
input[type=submit] {
  width: 10%;
  background: #fc354c; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #fc354c, #0abfbc); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #fc354c, #0abfbc); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 20px;
}

a:link{
  width: 150%;
  padding: 12px 3px;
  margin: 8px 0px;
  font-family: sans-serif;
  font-size: 20px;
}

</style>

<title> Gra </title>
</head>

<body>
<form action="" method="POST">
    <input type="submit" name="1" value="1!">
</form>

<form action="" method="POST">
    <input type="submit" name="2" value="Coś!">
</form>

<form action="" method="POST">
    <input type="submit" name="3" value="Wow!">
</form>

<form action="" method="POST">
    <input type="submit" name="4" value="meme!">
</form>
<a href="logout.php"> Wyloguj się</a><br /> <br />
<?php

if (isset($_POST['1'])) {
    $_SESSION["film"] = "jeden";
    header('Location: film.php'); exit;

}

if (isset($_POST['2'])) {
    $_SESSION["film"] = "dwa";
    header('Location: film.php'); exit;

}

if (isset($_POST['3'])) {
    $_SESSION["film"] = "trzy";
    header('Location: film.php'); exit;

}

if (isset($_POST['4'])) {
    $_SESSION["film"] = "cztery";
    header('Location: film.php'); exit;

}

?>
</body>
</html>