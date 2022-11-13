<html>
    <head>
        <title>Διαγραφή Φοιτητών</title>
    </head>
    <body>
  <?php

  $foititesam = $_POST['foitites'];
  $foititesstatusselect1 = $_POST['foititesstatusselect'];
  
  $mysqli = new mysqli('localhost', 'root', '', 'foitites');

  if($foititesstatusselect1==="Διαγραφή" && !(empty($foititesam))){
    $foitites = $mysqli->query("DELETE FROM foitites WHERE foitites.am = $foititesam");
    echo "Ο φοιτητής διαγράφτηκε με επιτυχία";
    header("refresh:1;delete.php");
  }

  ?>
    </body>
</html>