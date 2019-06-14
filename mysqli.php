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
$query="SELECT * FROM student";
$data=mysqli_query($com,$query);
$Student=mysqli_fetch_all($data,MYSQLI_ASSOC);
print_r($Student);
?>
<!DOCTYPE html>
<html>
	<head>
</head>
	<body>
<?php foreach($Student as $i): ?>
<h3><a href="alright.php?Id=<?php echo $i['Id'];?>"><?php echo $i['Name'];?></a></h3>

<?php endforeach;?>

	</body>
</html>