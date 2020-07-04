<?
$connection = [
'host'=> 'localhost',
'user' => 'root',
'database' => 'contro'];
$mysqli=mysqli_cennect($connection['host'],
$connection['user'],"",$connection['database']);

if($mysqli->connect_error){
	die($mysqli->connect_error);
}
?> 
<html>
    <head> 
        <link rel="stylesheet" href="s2.css"> 
    </head>
<body align="center">
    
    <br>
    <form method="post" action="">
    <div>
        <button  type="sumbit"   name="F" class="but4">FORWARDS</button>
  
    <div>
    <button type="sumbit"   name="L" class="but2">LEFT</button>
    <button  type="sumbit"  name="S" class="but1">STOP</button> 
    <button  type="sumbit"  name="R" class="but3">RIGHT</button>
        </div>
    
    <button  type="sumbit"  name="B" class="but5">BACKWARDS</button>
    
    </div>
    <br>
    </form>
    </body>
</html>

<?php 
$result='';
if (isset($_POST['F'])){
    $result = 'F';
    $sql =  "INSERT INTO `controller` (`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('', '', '$result', '', '')";
    if(mysqli_query($mysqli, $sql)){
            // Add this line to check if recorde is insert or not
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
        }

    mysqli_close($mysqli);
}
?>