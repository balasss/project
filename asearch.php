<html>
<head> 
<link rel="stylesheet" type="text/css" href="css/asearch.css">
</head>
<title> </title>
<body>
<?php
$link = mysqli_connect("localhost","root","","world") or die ("conn err:" . mysqli_error());
$search = $_GET['name'];
		if(!$search==''){            
		echo "<h3><center>Search For City Records</center></h3>";
		echo "<a href='index.php'> back to home page</a>";
		$sql="select * from city where Name like '$search%'";
            	$result = $link->query($sql);
		}
			echo "<table align='center' border=1>";
			echo "<tr><td>Id </td>";
			echo "<td>Name</td>";
			echo "<td>Country code</td>";
			echo "<td>District</td>";
			echo "<td>Population</td></tr>";
		while ($data=$result->fetch_array(MYSQLI_BOTH)){
	            
				
				echo "<tr><td> ".$data['ID'] . "</td>";
	            echo "<td> ".$data['Name'] . "</td>";
				echo "<td> ".$data['CountryCode'] . "</td>";
	            echo "<td> ".$data['District'] . "</td>";
				echo "<td> ".$data['Population'] . "</td></tr>";
				
				
		}
	echo "</table>";	
?>
</body>
</html>
