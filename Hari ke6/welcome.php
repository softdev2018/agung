<!DOCTYPE html>
<html>
<body>
welcome <?= $_POST["name"] ?><br>
<table>
	<tr>
		<td>your email address is </td>
		<td>: </td>
		<td><?php echo $_POST["email"]."<br>"?></td>
	</tr>
	<tr>
		<td>
			Your password 
		</td>
		<td> : </td>
		<td><?=$_POST["password"]?></td>
	</tr>

</table>
	
</body>
</html>