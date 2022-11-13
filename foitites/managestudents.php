<html>
    <head>
        <title>Επεξεργασία Φοιτητών</title>
        <link rel="stylesheet" href="manage.css">
    </head>
    <body>
      <div class="wrapper">
          <nav class="navbar">
            <ul>
              <li><a class="active" href="index.html">Αρχική</a></li>
				  	  <li><a href="students.php">Φοιτητές</a></li>
            </ul>
          </nav>
    
          <div class="inp">
            <h1>Επεξεργασία στοιχείων Φοιτητή</h1>
            <div class="inpborder"></div>
<?php
 $mysqli = new mysqli('localhost', 'root', '', 'foitites');
 $resultstatus = $mysqli->query("SELECT * FROM foitites");
?>

<div class="groupselect">
<div class="select1">
<form action="studentschangestatus.php" method="POST">
<select name = "foitites">
<option disabled>Επέλεξε Φοιτητή</option>
  <?php
  while($rows  = $resultstatus->fetch_assoc())
  {
    $am1 = $rows['am'];
    $eponimo1 = $rows['eponimo'];
    $onoma1 = $rows['onoma'];
    $eksamino1 = $rows['eksamino']; 
    $email1 = $rows['email']; 

    echo "<option value='$am1''>$am1 $eponimo1 $onoma1 </option>";
  }
  ?>
</select>
</div>
<div class="select1">
<select name = "statusselect">
<option disabled>Επεξεργασία</option>
<option>Αριθμός Μητρώου</option>
<option>Επώνυμο</option>
<option>Όνομα</option>
<option>Εξάμηνο</option>
<option>Email</option>
</select>
</div>
<div class="inp">    
            <input type="text" name="editnew"  class="forminput" placeholder="Ενημέρωση" required>
</div>
<button type="submit">Επεξεργασία</button>

</form>
</div>
</body>
</html>