<?php

//process_data.php

$connect = new PDO("mysql:host=localhost;dbname=aof", "root", "");

if(isset($_POST["query"]))
{	

	$data = array();

	$condition = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["query"]);

	$query = "SELECT nom FROM audiovisuel_ WHERE nom LIKE '%".$condition."%' ORDER BY id_a DESC LIMIT 10";

	$result = $connect->query($query);

	$replace_string = '<b>'.$condition.'</b>';

	foreach($result as $row)
	{
		$data[] = array(
			'nom'		=>	str_ireplace($condition, $replace_string, $row["nom"])
		);
	}

	echo json_encode($data);
}

?>