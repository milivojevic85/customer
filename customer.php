<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Customer</title>
</head>
<body>
<?php 
class Customer
{
	private $id = 1;
	public $name;
	public $email;
	public $balance;
	
	public function __construct() {
		echo "The constructor ran...";
	}
	
	public function getCustomer($id) {
		$this->id = $id;
		return "John Doe";
	}
	
	public function __destruct() {
		echo "The destructor ran...";
	}
}

$customer = new Customer;
echo $customer->getCustomer(10); // The constructor ran...John Doe The destructor ran...


?>
</body>
</html>
