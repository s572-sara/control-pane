<?php
$connect = mysqli_connect('localhost', 'root', '', 'contro');

if(mysqli_connect_error()){
	die("cannot connect to database" .mysqli_connect_error());
}else{
	echo "";
}
?>

	
<?php 
$sql=" SELECT * FROM controller ORDER BY id DESC LIMIT 1";
$result= mysqli_query($connect,$sql);
if(mysqli_num_rows($result)>0){
	$states = mysqli_fetch_assoc($result);
echo '<h1>' . $states['Right'] . $states['Left'] . $states['Forward'] . $states['Backward'] . $states['Stop'].'</h1>'; }
else{
	echo 'data base is empty';
	
	mysqli_close($connect);
}	
?>
