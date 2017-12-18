<?php

	// turn on error reporting
	// ini_set('display_errors', 1);
	// error_reporting(E_ALL);

	// Connect to database
	// opens connection to the database
	include('connect.php');

	if(isset($_GET['filter'])){
		//echo "	filter is set";
		// 1.) FIlters movies by genre

		$filter = $_GET['filter'];
		$filterQuery = "SELECT m.movies_id, m.movies_cover, m.movies_title, m.movies_year
		FROM tbl_movies m, tbl_genre g, tbl_mov_genre mg
		WHERE m.movies_id = mg.movies_id
		AND g.genre_id = mg.genre_id
		AND g.genre_name ='{$filter}'";
		$getMovies = mysqli_query($link, $filterQuery);
		//echo $filterQuery;

	}else if(isset($_GET['id'])){
		// 2.) Return a single movie

		$id = $_GET['id'];
		//echo $id;
		$querySingle = "SELECT * FROM tbl_movies WHERE movies_id ={$id}";
		//echo $querySingle;
		$getMovies = mysqli_query($link, $querySingle);

	}else if(isset($_GET['srch'])){
			//3.) Returns movies from user search

		$srch = $_GET['srch'];
		//echo $srch;
		$querySrch = "SELECT movies_id, movies_title, movies_year, movies_cover FROM tbl_movies WHERE movies_title LIKE '$srch%' ORDER BY movies_title ASC";
		//echo $querySrch;
		$getMovies = mysqli_query($link, $querySrch);

	}else{
		// 4.) Returns all movies

$movieQuery = "SELECT movies_id, movies_title, movies_year FROM tbl_movies ORDER BY movies_title ASC";
$getMovies = mysqli_query($link, $movieQuery);
//echo $getMovies;

}
$grpResult = "";

echo "[";

while($movResult = mysqli_fetch_assoc($getMovies)){
	$jsonResult = json_encode($movResult); //turns the array into a json object
	$grpResult .= $jsonResult.","; //appentds a , after every array to make valid json
}

echo substr($grpResult, 0, -1);

echo "]";

// closes the connection to the database
	mysqli_close($link);



?>
