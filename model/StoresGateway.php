<?php
require_once 'Database.php';



class StoresGateway extends Database
{

	public function selectAll($order,$record_per_page,$page,$filter,$latitude,$longitude)
	{

		if (!isset($order)) {
			$order = 'name';
		}
		//$start = 0;
		$start = 0;
			if($page > 0) {
				$start = ($page-1) * $record_per_page;
			}

		switch($filter) {

				case "open":
				$pdo = Database::connect();
				$sql = $pdo->prepare("SELECT * FROM stores WHERE current_time BETWEEN open_time AND close_time LIMIT $start,$record_per_page");
				$sql->execute();
				$stores = array();
				while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

					$stores[] = $obj;

				}
				return $stores;
				break;

				case "recently":
				$pdo = Database::connect();
				$sql = $pdo->prepare("SELECT * FROM stores ORDER BY created_at LIMIT $start,$record_per_page");
				$sql->execute();
				$stores = array();
				while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

					$stores[] = $obj;

				}
				return $stores;
				break;

				default:
				$pdo = Database::connect();
				$sql = $pdo->prepare("SELECT * FROM stores ORDER BY $order ASC LIMIT $start,$record_per_page");
				$sql->execute();
				$stores = array();
				while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

					$stores[] = $obj;

				}
				return $stores;
				break;
				
				$pdo = Database::connect();
				$sql = $pdo->prepare("SELECT * FROM stores WHERE (Latitude >= 1.2393 AND Latitude <= 1.5532) AND (Longitude >= -1.8184 AND Longitude <= 0.4221) HAVING acos(sin(1.3963) * sin(Latitude) + cos(1.3963) * cos(Latitude) * cos(Longitude - (-0.6981))) <= 0.1570  LIMIT $start,$record_per_page");
				$sql->execute();
				$stores = array();
				while ($obj = $sql->fetch(PDO::FETCH_OBJ)) {

					$stores[] = $obj;

				}
				return $stores;
			
		}
		
	}


	public function storeRowCount()
		{
				$sql = "SELECT * FROM stores";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute();
				$result = $stmt->rowCount();
				return $result;
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

}

?>
