<?php
$connection = [
'host'=> 'localhost',
'user' => 'root',
'database' => 'contro'];
$mysqli=mysqli_connect($connection['host'],
$connection['user'],"",$connection['database']);

if($mysqli->connect_error){
	die($mysqli->connect_error);
}
?>
<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="s2.css"> 
    </head>
<body >
    
    <br>
    <img src="8.png" class="logo">
    <form method="post"  class="button"  align="center" >
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
if (isset($_POST["F"])){
    $result = 'F';
    $sql =  "INSERT INTO `controller` (`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('', '', '$result', '', '')";
    if(mysqli_query($mysqli, $sql)){
            // Add this line to check if recorde is insert or not 
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
        }

    mysqli_close($mysqli);
}
if (isset($_POST["R"])){
    $result = 'R';
    $sql =  "INSERT INTO `controller` (`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('$result', '', '', '', '')";
    if(mysqli_query($mysqli, $sql)){
            // Add this line to check if recorde is insert or not 
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
        }

    mysqli_close($mysqli);
}
if (isset($_POST["B"])){
    $result = 'B';
    $sql =  "INSERT INTO `controller` (`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('', '', '', '$result', '')";
    if(mysqli_query($mysqli, $sql)){
            // Add this line to check if recorde is insert or not 
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
        }

    mysqli_close($mysqli);
}
if (isset($_POST["S"])){
    $result = 'S';
    $sql =  "INSERT INTO `controller` (`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('', '', '', '', '$result')";
    if(mysqli_query($mysqli, $sql)){
            // Add this line to check if recorde is insert or not 
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
        }

    mysqli_close($mysqli);
}
if (isset($_POST["L"])){
    $result = 'L';
    $sql =  "INSERT INTO `controller` (`Right`, `Left`, `Forward`, `Backward`, `Stop`) VALUES ('', '$result', '', '', '')";
    if(mysqli_query($mysqli, $sql)){
            // Add this line to check if recorde is insert or not 
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
        }

    mysqli_close($mysqli);
}
?>