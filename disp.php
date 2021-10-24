<?php
require('config.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table, td, th {
  border: 1px solid black;
   font-size: 30px;
   color:white;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>comparetech</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="coloumn7" class="column7">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "noumana";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, processor, ram, storage,display,phonecmp FROM nouman LIMIT 22";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>processor</th><th>display</th><th>ram</th><th>phonecompany</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["processor"]. "</td><td> " . $row["display"]. "</td><td> " . $row["ram"]. "</td><td> " . $row["phonecmp"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</div>
</body>
</html>