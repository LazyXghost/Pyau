<?php
    include_once 'dbh.inc.php';
	$sql = "SELECT * FROM pyau;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0) {
		echo "<table>";
		echo "<th><td>QR_CODE</td><td>LOCATION</td><td>WATER QUALITY</td><td>DISTANCE</td></th>";
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>" . "<br>";
            foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
                echo "<td>" . $value . "</td>"  . "<br>"; // I just did not use "htmlspecialchars()" function. 
            }
            echo "</tr>" . "<br>";
        }
        echo "</table>" . "<br>";
	}	
	// header("Location: index.php?submit=success");
?>