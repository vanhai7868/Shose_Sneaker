<?php
include "connect.php";
$email = $_POST['email'];
$pass = $_POST['pass'];

$query = 'SELECT * FROM `user` WHERE `email` = "'.$email.'" AND `pass`= "'.$pass.'"';
$data = mysqli_query($conn, $query);
$result = array();
while ($row = mysqli_fetch_assoc($data)) {
	// code...
	$result[] = ($row);
}

if (!empty($result)) {
	// code...
	$arr = [
		'success' => true,
		'message' => "thanh cong",
		'result' => $result
	];
}else{
	$arr = [
		'success' => false,
		'message' => "khong thanh cong",
		'result' => $result
	];
}
print_r(json_encode($arr));

?>