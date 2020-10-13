<?php
require_once ROOT_PATH.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.'StoresService.php';

class StoresController
{

	private $storesService = null;


			public function __construct()
		{
			$this->storesService = new StoresService();
		}

		public function redirect($location)
		{
			header('Location: ' . $location);
		}

		public function listRowCount()
		{
			return $this->storesService->getStoreRowCount();
		}

	public function listStores($record_per_page,$page,$filter,$latitude,$longitude)
	{
		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : null;
		$stores = $this->storesService->getAllStores($orderby,$record_per_page,$page,$filter,$latitude,$longitude);
		include ROOT_PATH . '../view/main.php';
	}

	public function showError($title, $message)
	{
		include ROOT_PATH . 'view/error.php';
	}
}

?>
