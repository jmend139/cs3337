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

$searchUser = "select * from users where " . "name='" . $_POST["name"] . "' and " . "email='" . $_POST["email"] . "'";
print $_POST["name"];
print $searchUser;
$results = mysqli_query($connect, $searchUser);

if (mysqli_num_rows($results)==0)
{
header("Location: login.html");
exit;
}

if (mysqli_num_rows($results)>0)
{

// header("Location: main.php");
// exit;

}

?>

</table>
</body>
</html>