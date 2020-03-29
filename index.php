<?php
session_start();

if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
    header("Location: gra.php");
    exit();
}
?>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title> FlixNet </title>
<style>
input[type=submit] {
  width: 15%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
input[type=text], select {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
a:link{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  font-family: sans-serif;
  font-size: 20px;
}

</style>
</head>

<body>

    <form action="zaloguj.php" method="post">
    <br />
 Login:<br /><input type="text" name="login"/>  <br />
 Hasło:<br><input type="password" name='haslo'/> <br /> <br />
<input type="submit" value="zaloguj"/>

    </form>  
<a href="rejestracja.php">Nie masz konta - Zarejstruj się </a> 
<br /> <br />
<?php 
    if(isset($_SESSION['blad']))
 {
    echo $_SESSION['blad'];
 }
    ?>
</body>
</html>