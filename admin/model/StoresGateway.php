<?php
require_once 'Database.php';

class StoresGateway extends Database
{

	

	public function selectAll($order)
	{
		if (!isset($order)) {
			$order = 'name';
		}
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM stores ORDER BY $order ASC");
		$sql->execute();


		$stores = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

			$stores[] = $obj;
		}
		return $stores;
	}

	public function selectAllIndex($order)
	{
		if (!isset($order)) {
			$order = 'name';
		}
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM stores ORDER BY $order ASC");
		$sql->execute();


		$stores = array();
		while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

			$stores[] = $obj;
		}
		return $stores;
	}


	public function selectById($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("SELECT * FROM stores WHERE id = ?");
		$sql->bindValue(1, $id);
		$sql->execute();
		$result = $sql->fetch(PDO::FETCH_OBJ);

		return $result;
	}

	public function insert($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("INSERT INTO stores (name, phone, street, city, state, pin, open_time, close_time, created_at, latitude, longitude) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$result = $sql->execute(array($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude));
	}

	public function edit($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude, $id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("UPDATE stores set name = ?, phone = ?, street = ?, city = ?, state = ?, pin = ?, open_time = ?, close_time = ?, created_at = ?, latitude = ?, longitude = ? WHERE id = ? LIMIT 1");
		$result = $sql->execute(array($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude,$id));
	}

	public function delete($id)
	{
		$pdo = Database::connect();
		$sql = $pdo->prepare("DELETE FROM stores WHERE id = ?");
		$sql->execute(array($id));
	}
}

?>
