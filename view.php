<html>
<head> 
<link rel="stylesheet" type="text/css" href="css/i.css">
<link rel="stylesheet" type="text/css" href="css/asearch.css">
</head>
<title> </title>

<body>
<?php
include "db.php";
//$link = mysqli_connect("localhost","root","","world") or die ("conn err:" . mysql_error());
if(empty($id)){ 
$action = $_REQUEST['action'];
$id = $_REQUEST['id'];
$sql = "SELECT * FROM city WHERE Name LIKE '$id%';";
$result = $link->query($sql);
//echo "Click More Detail of Cities </br>";
//$count=mysqli_num_rows($result);
//			echo "Total Records $count";
//<a href='search.php?action=search&id=$data[Name]'>$data[Name]</a></td>";
echo "<a href='index.php'> back to home page</a>";
echo "<h3 align='center'>To Click More Detail of City </h3></br>";
while($data = $result->fetch_array(MYSQLI_BOTH)){
	echo "<table width='400' align='center' border=1>";
	echo "<tr><td><center><a href='cview.php?action=search&id=$data[Name]'>$data[Name]</center></a></td>";
	
}
}

	echo "</tr>";
echo "</table>";
?>
</body>
</html>
