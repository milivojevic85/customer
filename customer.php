<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Customer</title>
</head>
<body>
<?php 
abstract class Customer
{
	private $id;
	private $name;
	protected $email;
	private $balance;
	
	public function __construct($id, $name, $email, $balance) {
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->balance = $balance;
	}
}

$customer = new Customer(1,"Brad Traversy", "brad@gmail.com", 0);

class Subscriber extends Customer
{
	public $plan;
	
	public function __construct($id, $name, $email, $balance, $plan) {
		parent:: __construct($id, $name, $email, $balance);
		$this->plan = $plan;
	}
	
	public function getEmail() {
		return $this->email;
	}
}

// $subscriber = new Subscriber(1,"Brad Traversy", "brad@gmail.com", 0, "Pro");
// echo $subscriber->getEmail();
?>
</body>
</html>
