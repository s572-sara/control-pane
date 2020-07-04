<? php 
$result="SLELCT `Right`, `Left`, `Forward`, `Backward`, `Stop` FROM 'controller'
ORDER BY id DESC
LIMIT 1";
$query= mysqli_query($mysqli, $result) or die(mysql_error());
while($row = mysqli_fetch_assoc($query)){
foreach($row as $row){
print "$row/t";
}
}
?>