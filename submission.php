<?php

/*
* Write your logic to manage the data
* like storing data in database
*/

// POST Data
$data['name'] = $_POST['firstName'] . " " . $_POST['lastName'];
$data['email'] = $_POST['email'];
$data['message'] = $_POST['message'];

echo json_encode($data);
exit;

?>
