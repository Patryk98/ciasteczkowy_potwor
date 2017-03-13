<?php
  if (isset($_COOKIE["zalogowany"]))
  {
    $zalogowany = $_COOKIE["zalogowany"];
  }
  else
  {
    $zalogowany = "nie";
    setcookie("zalogowany", $zalogowany, time()+60*60*24);
  }

  if(isset($_COOKIE["login"]))
  {
    $login = $_COOKIE["login"];
  }
  else
  {
    $login = "anonim";
    setcookie("login", $login, time() +60*60*24);
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
</head>
<body>
  <?php
    if ($zalogowany == "tak")
    {
        echo "Welcome in Matrix ".$login;
    }
    else
    {
    echo "<a href='logowanie.php'>Zaloguj się</a>";
    }

  ?>
</body>
</html>
