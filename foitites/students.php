<!DOCTYPE html>
<html lang="el">
<head>
	<meta charset="UTF-8">
	<title>Καλώς ήρθατε στο Μητρώο Φοιτητών του Πανεπιστημίου Πατρών</title>
	<link rel="stylesheet" href="homeStylesheet.css">
</head>
<style>
	table {
	border-collapse: collapse 10px;
	width: 100%;
	color: #588c7e;
	font-family: monospace;
	font-size: 25px;
	text-align: center;
	background-color: #f2f2f2;
	border-radius: 10px;
	}
	td { 
    
	}
	th {
	background-color: #588c7e;
	color: white;
	padding: 20px;
	}
	</style>
<body>
<div class="background-image"></div>
	<div class="wrapper">
			<nav class="navbar">
				<ul>
					<li><a class="active" href="index.html">Αρχική</a></li>
					<li><a href="students.php">Φοιτητές</a></li>
				</ul>
			</nav>
			<div class="center">
				<h1>Φοιτητές Εγγεγραμμένοι στο Πανεπιστήμιο Πατρών</h1>
				<br><br><br>
				<table>
		<tr>
		<th>Αριθμός Μητρώου</th>
		<th>Επώνυμο</th>
		<th>Όνομα</th>
		<th>Εξάμηνο</th>
		<th>Email</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "foitites");
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM foitites";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["am"]. "</td><td>" . $row["eponimo"] . "</td><td>" . $row["onoma"] . "</td><td>" . $row["eksamino"] . "</td><td>" . $row["email"] . "</td><td>";
		}
		} else { echo "0 results"; }
		$conn->close();
		?>
</table>
			<div class="buttons">
				<form method="LINK" action="add.php">
					<button type="submit">Προσθήκη Φοιτητή στο Μητρώο</button>
				</form>
				<form method="LINK" action="managestudents.php">
					<button type="submit">Επεξεργασία Φοιτητή του Μητρώο</button>
				</form>
				<form method="LINK" action="delete.php">
					<button type="submit">Διαγραφή Φοιτητή από Μητρώο</button>
				</form>
			</div>
	</div>
</body>
</html>