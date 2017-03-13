<?php
$login = $_REQUEST["login"];
$password = $_REQUEST["password"];
if ($login_form == "Patryk" && $password == "123")
{
  $zalogowany = "tak";
  setcookie("zalogowany", $zalogowany, time()+60*60);
  setcookie("login_form", $login, time()+60*60);
}
else
{
  $zalogowany = "nie";
  setcookie("zalogowany", $zalogowany, time()+60*60);
  setcookie("login", $login_form, time()+60*60);
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
    echo "<p>Niepoprawny login lub hasło<p>";
    echo "<a href='logowanie.php'>Zaloguj się</a>";
    }

  ?>
</body>
</html>
