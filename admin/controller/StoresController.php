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

	public function handleRequest()
	{
		$op = isset($_GET['op']) ? $_GET['op'] : null;

		try {

			if (!$op || $op == 'list') {
				$this->listStores();
			} elseif ($op == 'new') {
				$this->saveStore();
			} elseif ($op == 'edit') {
				$this->editStore();
			} elseif ($op == 'delete') {
				$this->deleteStore();
			} elseif ($op == 'show') {
				$this->showStore();
			} else {
				$this->showError("Page not found", "Page for operation " . $op . " was not found!");
			}
		} catch(Exception $e) {
			$this->showError("Application error", $e->getMessage());
		}
	}




	public function listStores()
	{
		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : null;
		$stores = $this->storesService->getAllStores($orderby);
		include ROOT_PATH . '../view/stores.php';

	}
	public function listStoresIndex()
	{
		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : null;
		$stores = $this->storesService->getAllStoresIndex($orderby);
		include ROOT_PATH . '../../main.php';

	}

	public function saveStore()
	{
		$title = 'Add Store Information';

		$name = '';
		$phone = '';
		$street = '';
		$city = '';
		$state = '';
		$pin = '';
		$open_time = '';
		$close_time ='';
		$created_at = '';
		$latitude = '';
		$longitude = '';


		$errors = array();

		if (isset($_POST['form-submitted'])) {

			$name 	 = $_POST['name'];
			$phone  = $_POST['phone'];
			$street 	 = $_POST['street'];
			$city 	 = $_POST['city'];
			$state 	 = $_POST['state'];
			$pin	 = $_POST['pin'];

			$open_time = "";
	 if ($_POST["open_time"]) {
		 $open_time_new = strtotime($_POST["open_time"]);
		 $open_time = date("H:i:s", $open_time_new);
		}

	 $close_time = "";
	 if ($_POST["close_time"]) {
		 $close_time_new = strtotime($_POST["close_time"]);
		 $close_time = date("H:i:s", $close_time_new);
	 }

	 $created_at  = "";
	 if ($_POST["created_at"]) {
		 $created_at_new = strtotime($_POST["created_at"]);
		  $created_at = date("Y-m-d", $created_at_new);
	 }
			$latitude  = $_POST['latitude'];
			$longitude 	 = $_POST['longitude'];

			try {
				$this->storesService->createNewStore($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude);
				$this->redirect('index.php');
				return;
			} catch(ValidationException $e) {
				$errors = $e->getErrors();
			}
		}

		include ROOT_PATH.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'store-form.php';
	}

	public function editStore()
	{
		$title  = "Edit Store";

		$name = '';
		$phone = '';
		$street = '';
		$city = '';
		$state = '';
		$pin = '';
		$open_time = '';
		$close_time ='';
		$created_at = '';
		$latitude = '';
		$longitude = '';
		$id      = $_GET['id'];

		$errors = array();

		$store = $this->storesService->getStore($id);

		if (isset($_POST['form-submitted'])) {


			$name 	 = isset($_POST['name']) 	? trim($_POST['name']) 	  : null;
			$phone  = isset($_POST['phone']) 	? trim($_POST['phone'])   : null;
			$street 	 = isset($_POST['street']) 	? trim($_POST['street']) 	  : null;
			$city 	 = isset($_POST['city']) 	? trim($_POST['city']) 	  : null;
			$state 	 = isset($_POST['state']) 	? trim($_POST['state']) 	  : null;
			$pin	 = isset($_POST['pin']) 	? trim($_POST['pin']) 	  : null;
			$open_time 	 = isset($_POST['open_time']) 	? trim($_POST['open_time']) 	  : null;
			$close_time 	 = isset($_POST['close_time']) 	? trim($_POST['close_time']) 	  : null;
			$created_at 	 = isset($_POST['created_at']) 	? trim($_POST['created_at']) 	  : null;
			$latitude  = isset($_POST['latitude']) 	? trim($_POST['latitude']) 	  : null;
			$longitude 	 = isset($_POST['longitude']) 	? trim($_POST['longitude']) 	  : null;

			try {
				$this->storesService->editStore($name, $phone, $street, $city, $state, $pin, $open_time, $close_time, $created_at, $latitude, $longitude, $id);
				$this->redirect('index.php');
				return;
			} catch(ValidationException $e) {
				$errors = $e->getErrors();
			}
		}
		// Include in the view of the edit form
		include ROOT_PATH.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'store-form-edit.php';
	}

	public function deleteStore()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;
			if (!$id) {
				throw new Exception('Internal error');
			}
			$this->storesService->deleteStore($id);

			$this->redirect('index.php');
	}

	public function showStore()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$errors = array();

		if (!$id) {
			throw new Exception('Internal error');
		}
		$store = $this->storesService->getStore($id);

		include ROOT_PATH.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'store.php';
	}

	public function showError($title, $message)
	{
		include ROOT_PATH . 'view/error.php';
	}
}

?>
