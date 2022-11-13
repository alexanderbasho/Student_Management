<html>
<head>
<title>Delete Student</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="delete.css">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  width: 100%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  width: 100%;
}
</style>
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
            <h1>Διαγραφή Φοιτητών από το Μητρώο</h1>
            <div class="inpborder"></div>
<?php
 $mysqli = new mysqli('localhost', 'root', '', 'foitites');
 $resultfoitites = $mysqli->query("SELECT * FROM foitites");
?>

<div class="row">
  <div class="column">
  <div class="groupselect">
<div class="select1">
<form action="deletestatus.php" method="POST">
<select name = "foitites">
<option disabled>Διάλεξε Φοιτητή</option>
  <?php
  while($rows  = $resultfoitites->fetch_assoc())
              {
                $am1 = $rows['am'];
                $eponimo1 = $rows['eponimo'];
                $onoma1 = $rows['onoma'];
                echo "<option value='$am1''>$am1 $eponimo1 $onoma1</option>";
              }
  ?>
</select>
</div>
<div class="select1">
<select name = "foititesstatusselect">
<option selected>Διαγραφή</option>
</select>
</div>

<button type="submit">Submit</button>

</form>
</div>
</div> 

</body>
</html>