<?php
class Customers
{
	use Controller;



	function Hello(){
		printf("Hello");
	}

	function index(){
		var_dump($_GET);
		$q = $_REQUEST["q"] ?? null;
		$customerModel = $this->model("CustomerModel");
		$customers = $customerModel->getCustomers($q);
		$this->view("CustumerLayout", [
			"Page" => "index",
			"customers" => $customers
		]);
	}
}
