<html>
<head>
<title>Co</title>
</head>
<body>

<?php

$servername="localhost";
$usename="root";
$password="";
$dbname="reserve_table";
$conn=mysqli_connect($servername,$usename,$password,$dbname);

if($conn)
{
    echo "Connection OK";
}
else
{
    echo"Connection Failed".mysqli_connect_error();
}
?>
</body>
</html>