<?php
print<<<TOP
<html>
<head>
<title> View Student Record </title>
<?php include "../head-content.php"; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table">
	<thead class="thead-dark">
    	<tr>
      	<th scope="col">First Name</th>
      	<th scope="col">Last Name</th>
      	<th scope="col">Languages</th>
      	<th scope="col">Price Range</th>
      	<th scope="col">Transportation</th>
      	<th scope="col">Rating</th>
    	</tr>
    </thead>
TOP;

	$host = "spring-2018.cs.utexas.edu";
	$user = "ncald";
	$pwd = "ra3pNnEmSl";
	$dbs = "cs329e_ncald";
	$port = "3306";

	$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

	if (empty($connect)) {
  		die("mysqli_connect failed: " . mysqli_connect_error());
	}

	$table = "userinfo";
	$result = mysqli_query($connect, "SELECT firstname, lastname, languages, pricerange, payment, transportation,stars from $table order by firstname;");
	while ($row = $result->fetch_row()) {
		print "<tr>";
		for ($i = 0; $i < count($row); $i++) {
			print "<td>$row[$i]</td>";
		}
		print "</tr>";
	}

	$result->free();

	mysqli_close($connect);

print<<<BOTTOM
</table>
<?php include "../footer.php"; ?>
</body>
</html>
BOTTOM;
?>
