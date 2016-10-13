<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$postdata = file_get_contents("php://input");
	$data = json_decode($postdata, true);

	if(isset($data["service"]))
	{
		$link = mysql_connect('127.0.0.1', 'root', 'root')
		    or die('Can not connect to DB: ' . mysql_error());
		mysql_select_db('life_game') or die('Can not select DB');

		$service = $data["service"];

		switch ($service) {
			case 'login':
				login($data);
				break;
			
			default:
				# code...
				break;
		}

		mysql_close($link);
	}
}

function login($data)
{
	if($data["login"] && $data["password"])
	{
		$login = $data["login"];
		$password = $data["password"];

		$query = "SELECT * FROM users WHERE login='$login'";
		$result = mysql_query($query) or die('Wrong query: ' . mysql_error());

		$jsonData = array();
		while ($array = mysql_fetch_row($result)) {
		    $jsonData[] = $array;
		}
		echo json_encode($jsonData);

		mysql_free_result($result);
	}
	else
	{
		echo "Wrong data";
	}

	return;
}

?>