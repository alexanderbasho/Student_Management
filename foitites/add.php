<html>
<body>  
<head>
<link rel="stylesheet" href="add.css">
<style>
  .error {color: #FF0000;}
</style>
</head>  

<?php
// define variables and set to empty values
$amErr = $eponimoErr = $onomaErr =$eksaminoErr =$emailErr ="";
$am = $eponimo = $onoma =$eksamino =$email ="";
$valid=true;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["am"])) 
  {
    $amErr = "To AM είναι υποχρεωτικό";
	  $valid=false;
  } 
  else 
  {
    $am = test_input($_POST["am"]);
	  $length = strlen($am);
  }
  
  if (empty($_POST["eponimo"])) 
  {
    $eponimoErr = "To Επώνυμο είναι υποχρεωτικό";
	  $valid=false;
  } 
  else 
  {
    $eponimo = test_input($_POST["eponimo"]);
	  $length = strlen($eponimo);
  }
  
  if (empty($_POST["onoma"])) 
  {
    $onomaErr = "To Όνομα είναι υποχρεωτικό";
	  $valid=false;
  } 
  else 
  {
    $onoma = test_input($_POST["onoma"]);
	  $length = strlen($onoma);
  }

  if (empty($_POST["eksamino"])) 
  {
    $eksaminoErr = "To Εξάμηνο είναι υποχρεωτικό";
	  $valid=false;
  } 
  else 
  {
    $eksamino = test_input($_POST["eksamino"]);
	  $length = strlen($eksamino);
  }

  if (empty($_POST["email"])) {
    $emailErr = "To Email είναι υποχρεωτικό";
	$valid=false;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "To format του email δεν είναι σωστό"; 
	  $valid=false;
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<nav class="navbar">
				<ul>
					<li><a class="active" href="index.html">Αρχική</a></li>
          <li><a href="students.php">Φοιτητές</a></li>
				</ul>
</nav>

<div class="contact">
  <h1>Εγγραφή Φοιτητή</h1>
  <div class="contactborder"></div>
  <form class= "form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	<input class="forminput" placeholder="Αριθμός Μητρώου" required type="text" name="am" value="<?php echo $am;?>">
	<br><br>
	<input class="forminput" placeholder="Επώνυμο" required type="text" name="eponimo" value="<?php echo $eponimo;?>">
	<br><br>
	<input class="forminput" placeholder="Όνομα" required type="text" name="onoma" value="<?php echo $onoma;?>">
	<br><br>
	<input class="forminput" placeholder="Εξάμηνο" required type="text" name="eksamino" value="<?php echo $eksamino;?>">
	<br><br>
	<input class="forminput" placeholder="Email" required type="text" name="email" value="<?php echo $email;?>">
	<br>
	<br><br>
	<input class="formsubmit" type="submit" name="submit" value="Καταχώρηση">  
</form>
</div>

<?php
if ($valid && $_SERVER["REQUEST_METHOD"] == "POST" )
{
// Create connection
$conn = mysqli_connect("localhost","root", "", "foitites");
// Check connection
if (!$conn) {
    die("Η σύνδεση απέτυχε: " . mysqli_connect_error());
}

$sql = "INSERT INTO foitites (am, eponimo, onoma, eksamino, email)
VALUES ('$am', '$eponimo', '$onoma', '$eksamino', '$email')";

if (mysqli_query($conn, $sql)) 
{  
echo '<script type ="text/JavaScript">';  
echo 'alert("Η εγγραφή καταχωρήθηκε με επιτυχία")';  
echo '</script>';  
header("refresh:0.5;students.php");
} else {
    echo "Λάθος: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>