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
	private $id;
	public $name;
	public $email;
	public $balance;
	
	public function __construct($id, $name, $email, $balance) {
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->balance = $balance;
	}

}

$customer = new Customer(1, "Brad Traversy","brad@gmail.com",0);
echo $customer->name; // Brad Traversy


?>
</body>
</html>
