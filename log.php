<?php
$con=mysqli_connect('localhost', 'root', '', 'project');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM log");

echo "<table border='1'>
<tr>
<th>S.No.</th>
<th>Username</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
