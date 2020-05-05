<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $mail=$_GET['mail'];
    if (strpos($mail, '@') === false) {
      echo 'KO manca la chiocciola';
    }
    else if (strpos($mail, '.') === false){
      echo "KO manca il punto";
    }
    else{ echo "<div>OK</div>";
    }
    ?>
  </body>
</html>
