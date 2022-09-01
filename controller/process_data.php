<?php

//connexion a la BDD

$connect = new PDO("mysql:host=localhost;dbname=aof", "root", "");
//ma requete pour la barre de recherche avec ma requete sql des données que je veux recuperer ici le titre des oeuvres 
if(isset($_POST["query"]))
{	

	$data = array();

	$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

	$query = "
	SELECT nom FROM audiovisuel
		WHERE nom LIKE '%".$condition."%' 
	";

	$result = $connect->query($query);

	$replace_string = '<b>'.$condition.'</b>';

	foreach($result as $row)
	{
		$data[] = array(
			'nom'	=>	str_ireplace($condition, $replace_string, $row["nom"])
		);
	}

	echo json_encode($data);
}



if(isset($post_data['thriller']))
{
	if($post_data['thriller'] == 'fetch')
	{
		$query = "SELECT * FROM thriller ORDER BY id_a DESC LIMIT 14";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{

			$data[] = array(
				'id_a'				=>	$row['id_a'],
				'nom'		=>	$row["nom"]
			);
		}

		echo json_encode($data);
	}

}




