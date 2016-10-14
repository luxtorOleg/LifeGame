<?php

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$postdata = file_get_contents("php://input");
		$data = json_decode($postdata, true);
		if(isset($data["service"]))
		{
			require_once "config.php";
			$pdo = new PDO("mysql:dbname=$_DBNAME;host=$_MYSQLSERVER", $_USERMYSQL, $_PWMYSQL);

			$service = $data["service"];

			switch ($service) {
				case 'login':
					login($data,$pdo);
					break;
				case 'registration':
					registration($data,$pdo);
					break;
				default:
					# code...
					break;
			}

			$pdo=null;
		}
	}

	function registration($data, $pdoConn)
	{
		$login = $data["login"];
		$name = $data["name"];
		$surname = $data["surname"];
		$email = $data["email"];
		$password = $data["password"];

		$ar = array($data["login"], $data["name"], $data["surname"], $data["email"], $data["password"]);

		$st = $pdoConn->prepare("INSERT INTO users (login,password,name,surname,email) VALUES  (:Login,:Password,:Name,:Surname,:EMail)");

		$st->bindParam(":Login", $login, PDO::PARAM_STR);
		$st->bindParam(":Name", $name, PDO::PARAM_STR);
		$st->bindParam(":Surname", $surname, PDO::PARAM_STR);
		$st->bindParam(":EMail", $email, PDO::PARAM_STR);
		$st->bindParam(":Password", $password, PDO::PARAM_STR);

		$st->execute();
		print_r($st->errorInfo());
	}
	function login($data, $pdoConn)
	{
		if($data["login"] && $data["password"])
		{
			$login = $data["login"];
			$password = $data["password"];

			$query = "SELECT id,login,name,surname,email FROM users WHERE login='$login' and password='$password'";


			$jsonData = array();
			foreach ($pdoConn->query($query) as $row) {
					 $jsonData[] = array(
						 "login"=>$row["login"],
						 "name"=>$row["name"],
						 "surname"=>$row["surname"],
						 "email"=>$row["email"]
					 );
			}

			echo json_encode($jsonData);

		}
		else
		{
			echo "Wrong data";
		}

		return;
	}


?>