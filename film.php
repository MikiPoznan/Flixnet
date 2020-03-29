<?php
 session_start();
 if((!isset($_SESSION['zalogowany'])) && (!$_SESSION['zalogowany']==true)){
  header("Location: index.php");
  exit();
}
?>
<html>
<head>
<style>
a:link{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  font-family: sans-serif;
  font-size: 20px;
}
a{
  width: 100%;
  padding: 2px 2px;
  margin: 2px 0;
  font-family: sans-serif;
  font-size: 20px;
}
span{
  width: 100%;
  padding: 2px 2px;
  margin: 2px 0;
  font-family: sans-serif;
  font-size: 20px; 
}
video{
  width: 50%;
  margin: 10px 10px;
}
</style>
</head>
<video width="400" controls>
  <source src="<?php if(isset($_SESSION['film'])){ echo $_SESSION['film'] ;} else { header("Location: index.php");; } ?>.mp4" type="video/mp4">
</video>
<br />
<a href="logout.php">Wyloguj się</a><a>|</a> <a href="gra.php">Wróć</a><br /> <br />
</html>