<html>
<head> 
<link rel="stylesheet" type="text/css" href="css/i.css">
<link rel="stylesheet" type="text/css" href="css/asearch.css">
</head>
<title> </title>

<body>
<?php
include "db.php";
    $action=$_REQUEST['action'];
		$id=$_REQUEST['id'];
		
		$sql="select * from city where Name='$id'";
		$result = $link->query($sql);
			
			
			
			$data = $result->fetch_array(MYSQLI_BOTH);
				
		echo "<a href='index.php'> back to home page</a></br>";
		echo "<a href='view.php'>back to alpabaic search</a>";
				echo "<table align='center' border=1>";
				echo '<tr><td><b>'.$data['Name'] . ' City Full Details</b>' ;
				echo '<tr><td><br/> ID: '.$data['ID'];
	            echo '<br/> Name: '.$data['Name'] ;
				echo '<br/> CountryCode: '.$data['CountryCode'] ;
	            echo '<br/> District: '.$data['District'] ;
				echo '<br/> Population: '.$data['Population'] .'</td>';
		
echo "</tr>";
echo "<table>";

?>
</body>
</html>
