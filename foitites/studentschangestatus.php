<html>
    <head>
        <title>Τα στοιχεία του φοιτητή άλλαξαν</title>
    </head>
    <body>
 <?php
    
  $foititesam= $_POST['foitites'];
  $statusselect= $_POST['statusselect'];
  $editnew = $_POST['editnew'];

  $mysqli = new mysqli('localhost', 'root', '', 'foitites');
  $resultstatus = $mysqli->query("SELECT * FROM foitites");

  while($rows  = $resultstatus->fetch_assoc())
  {
    $am1 = $rows['am'];
    if($statusselect=="Αριθμός Μητρώου" && $am1 == $_POST['foitites'])
    {
      $foitites = $mysqli->query("UPDATE foitites SET am = '$editnew' WHERE am='$am1'");
      echo "Τα στοιχεία του φοιτητή άλλαξαν"; 
      header("refresh:1;managestudents.php");   
    }   

    else if($statusselect=="Επώνυμο" && $am1 == $_POST['foitites'])
    {
      $foitites = $mysqli->query("UPDATE foitites SET eponimo = '$editnew' WHERE am=' $am1'");
      echo "Τα στοιχεία του φοιτητή άλλαξαν";  
      header("refresh:1;managestudents.php");   
    }

    else if($statusselect=="Όνομα" && $am1 == $_POST['foitites'])
    {
      $foitites = $mysqli->query("UPDATE foitites SET onoma = '$editnew' WHERE am=' $am1'");
      echo "Τα στοιχεία του φοιτητή άλλαξαν";  
      header("refresh:1;managestudents.php");   
    } 

    else if($statusselect=="Εξάμηνο" && $am1 == $_POST['foitites'])
    {
      $foitites = $mysqli->query("UPDATE foitites SET eksamino = '$editnew' WHERE am=' $am1'");
      echo "Τα στοιχεία του φοιτητή άλλαξαν";  
      header("refresh:1;managestudents.php");   
    } 
    
    else if($statusselect=="Email" && $am1 == $_POST['foitites'])
    {
      $foitites = $mysqli->query("UPDATE foitites SET email = '$editnew' WHERE am=' $am1'");
      echo "Τα στοιχεία του φοιτητή άλλαξαν"; 
      header("refresh:1;managestudents.php");   
    } 
  }
  ?>
</body>
</html>