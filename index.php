<?php 	
	
	//Select
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";

	try{

		$pdo = new PDO($dsn, $dbuser, $dbpass);
		$sql = "SELECT * FROM clientes";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0){
			foreach ($sql->fetchAll() as $cliente) {
				echo "Nome: ".$cliente["nome"]." - ".$cliente["email"]."</br>";
			}
		}else{
			echo "Não há usuários cadastrados!";
		}

	}catch(PDOException $e){

		echo "Falho: ".$e->getMessage();

	}

	

?>