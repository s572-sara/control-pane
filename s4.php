<?
$connection = [
'host'=> 'localhost',
'user' => 'root',
'database' => 'contro'
];
$mysqli=mysqli_cennect($connection['host'],
$connection['user'],"",$connection['database']);

if($mysqli->connect_error){
	die($mysqli->connect_error);
}
?>