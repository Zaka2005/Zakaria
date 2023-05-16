<?php

//$variabele1 = 10;
//$variabele2 = 10;
//if ( $variabele1 == $variabele2 ) {

//    echo "De twee waarden zijn gelijk";

//}

//$variabele1 = 9;
//$variabele2 = 10;
//if ( $variabele1 != $variabele2 ) {

//    echo "De twee waarden zijn ongelijk";

//}

//$variabele1 = 10;
//$variabele2 = 10;

//if ( $variabele1 == $variabele2 ) {

//        echo "De twee waarden zijn gelijk";

//} else {

//        echo "De twee waarden zijn ongelijk";

//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<form method="GET">

<label for="text">username:</label>
<input type="text" name="username" placeholder="username">
<label for="password">password:</label>
<input type="password" name= "password" placeholder="password">
<input type="submit" name="submit">

</form>

<?php
if (isset($_GET['submit'])) {
$username = $_GET['username'];
$password = $_GET['password'];
echo "username: " . $username;
echo "password: " . $password;
}
 ?>

</body>

</html>