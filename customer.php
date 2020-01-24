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
}

$customer = new Customer; // The constructor ran...


?>
</body>
</html>
