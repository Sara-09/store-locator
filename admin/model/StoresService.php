<?php

require_once ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'StoresGateway.php';
require_once ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'Database.php';

class StoresService extends StoresGateway
{

	private $storesGateway = null;

	public function __construct()
	{
		$this->storesGateway = new StoresGateway();
	}

	public function getAllStores($order) {
	    try {
	        self::connect();
	        $res = $this->storesGateway->selectAll($order);
	        self::disconnect();
	        return $res;
	    } catch (Exception $e) {
	        self::disconnect();
	        throw $e;
	    }
	}

	public function getAllStoresIndex($order) {
	    try {
	        self::connect();
	        $res = $this->storesGateway->selectAllIndex($order);
	        self::disconnect();
	        return $res;
	    } catch (Exception $e) {
	        self::disconnect();
	        throw $e;
	    }
	}

	public function getStore($id)
	{
		try {
			self::connect();
			$result = $this->storesGateway->selectById($id);
			self::disconnect();
			return $result;
		} catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
		return $this->storesGateway->selectById($id);
	}

	public function createNewStore($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude)
	{
		try {
			self::connect();
			$result = $this->storesGateway->insert($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude);
			self::disconnect();
			return $result;
		} catch(Exception $e) {
			self::disconnect();
			throw $e;

		}
	}

	public function editStore($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude, $id)
	{
		try {
			self::connect();
			$result = $this->storesGateway->edit($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude, $id);
			self::disconnect();
		}catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
	}

	public function deleteStore($id)
	{
		try {
			self::connect();
			$result = $this->storesGateway->delete($id);
			self::disconnect();
		} catch(Exception $e) {
			self::disconnect();
			throw $e;
		}
	}
}

?>
