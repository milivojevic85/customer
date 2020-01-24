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
	
	public function getCustomer($id) {
		$this->id = $id;
		return "John Doe";
	}
}

$customer = new Customer;
echo $customer->getCustomer(1);

?>
</body>
</html>
