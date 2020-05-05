<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // $stringa = 'Stringa di esempio';
    // echo strlen($stringa); // restituirà 18
    $nome_utente=$_GET['nome'];
    if (strlen($_GET['nome'])<3 ){
      echo ("Inserisci un nome valido");
    }
    else if( strlen($_GET['cognome'])<3){
        echo ("Inserisci un cognome valido");
    }
    else{
    $cognome_utente=$_GET['cognome'];
    echo "Ciaociaociao " . $nome_utente." ". $cognome_utente;
    }
    ?>
  </body>
</html>
