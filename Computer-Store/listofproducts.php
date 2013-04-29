<html>
<body>

<?php
session_start();
	
include('config.php');
$query="select Pname,Price,Stock from PRODUCTS;";

$result=mysql_query($query);
echo "<h3> List of all Products </h3>";
echo "<table border='1'>
<tr>
<th>Product Name</th>
<th>Price</th>
<th>Stock</th>
</tr>";

while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['Pname'] . "</td>";
  echo "<td>" . $row['Price'] . "</td>";
  echo "<td>" . $row['Stock'] . "</td>";
  echo "</tr>";
  }
echo "</table><br/><br/>";
print "<a style='text-decoration:none' href='home.php'<button>Back to Home Page</button> </a>";

?>

</body>
</html>
