[
<?php

$hostname = "localhost";
$bancodedados = "pesquisa";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname,  $usuario, $senha, $bancodedados);
if($mysqli->connect_errno) {
    echo "Falha ao conectar.";
}else {
    echo "";
}


// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $mysqli = new mysqli("localhost", "my_user", "my_password", "world");

// /* Create table doesn't return a resultset */
// $mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City");
// printf("Table myCity successfully created.\n");

// /* Select queries return a resultset */
// $result = $mysqli->query("SELECT Name FROM City LIMIT 10");
// printf("Select returned %d rows.\n", $result->num_rows);

// /* If we have to retrieve large amount of data we use MYSQLI_USE_RESULT */
// $result = $mysqli->query("SELECT * FROM City", MYSQLI_USE_RESULT);

// /* Note, that we can't execute any functions which interact with the
//     server until all records have been fully retrieved or the result
//     set was closed. All calls will return an 'out of sync' error */
// $mysqli->query("SET @a:='this will not work'");
