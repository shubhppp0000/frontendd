	
<?php
$com=mysqli_connect('localhost','root','','blog');
if(mysqli_connect_errno())
{
	echo "Error";
}
else
{
	echo "Connected";
}
$Id=$_GET['Id'];
$query="SELECT * FROM Student WHERE Id={$Id}";
$data=mysqli_query($com,$query);
$Student=mysqli_fetch_all($data,MYSQLI_ASSOC);
echo "<br>";
print_r($Student);
?>
<!DOCTYPE html>
<html>
	<head>
</head>
	<body>
<?php foreach($Student as $i): ?>
<h3><?php echo $i['Name'];?></h3>
<h3><?php echo $i['Roll_No'];?></h3>
<h3><?php echo $i['Age'];?></h3>
<?php endforeach;?>

	</body>
</html>