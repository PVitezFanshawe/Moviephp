<?php

	// turn on error reporting
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	// Connect to database
	// opens connection to the database
	include('connect.php');

$movieQuery = "SELECT movies_id, movies_title, movies_year FROM tbl_movies order by movies_title asc";
$getMovies = mysqli_query($link, $movieQuery);
//echo $getMovies;
$grpResult = "";

echo "[";

while($movResult = mysqli_fetch_assoc($getMovies)){
	$jsonResult = json_encode($movResult);
}

echo "]";

// closes the connection to the database
	mysqli_close($link);



?>
