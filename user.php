<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User</title>
</head>
<body>
<?php 
class User
{
	public $username;
	public $password;
	public static $passwordLength = 5;
	
	public static function getPasswordLength() {
		return self::$passwordLength;
	}
}
echo User::getPasswordLength(); // 5
?>
</body>
</html>