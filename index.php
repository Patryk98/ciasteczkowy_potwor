<?php
  if (isset($_COOKIE["liczba"]))
  {
    $liczba = $_COOKIE["liczba"]+1;
  }
  else
  {
    $liczba = 1;
  }
  setcookie("liczba", $liczba, time()+10);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>
  <?php
    echo ($liczba);
  ?>
</body>
</html>
