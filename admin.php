<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

<?php
include("Connect_Database.php");
?>
<?php 

?>

<?php

$selectUsers = "select * from users";
$results = mysqli_query($connect, $selectUsers);

?>

<table align="center" border="2" width=400>
<tr>
<th>
Name
</th>
<th>
Email
</th>
<th>
Delete
</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($results))
{
print "<tr>";
print "<td>";
print ($row["name"]);
print "</td>";
print "<td>";
print ($row["email"]);
print "</td>";
print "<td>";
print "<a href='UserDelete.php?";
print "email=" . $row["email"] . "'>";
print "DELETE";
print "</a>";
print "</td>";
print "</tr>";
}
?>
</table>
</body>
</html>