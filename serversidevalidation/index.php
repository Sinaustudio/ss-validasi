<!doctype html>
<html>
<head>
<title>file uploading using php</title>
<meta charset="utf-8" />
</head>
<body>
<?php require_once("validate.php"); ?>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form action="" method="post">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td><strong>Sample Form</strong></td>
</tr>
<tr>
	<td>Name: <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" size="50"/><div style="color:red;"><?php echo $error_name;?></div></td>
</tr>
<tr>
	<td>Email: <input type="text" name="email"  value="<?php if(isset($email)){echo $email;}?>" size="50"/><div style="color:red;"><?php echo $error_email;?></div></td>
</tr>
<tr>
	<td>Phone Number: <input type="text" name="phoneNumber"  value="<?php if(isset($phoneNumber)){echo $phoneNumber;}?>" size="50"/><div style="color:red;"><?php echo $error_phone;?></div></td>
</tr>
<tr>
	<td>Url: <input type="text" name="url" value="<?php if(isset($url)){echo $url;}?>"  size="50"/><div style="color:red;"><?php echo $error_url;?></div></td>
</tr>
<tr>
	<td> Select Gender:
		<select name="gender">
			<option value="0">Gender</option>
			<option value="1">Male</option>
			<option value="2">Female</option>
		</select>
		<div style="color:red;"><?php echo $error_gender;?></div>
	</td>
</tr>
<tr>
	<td align="center"><input type="submit" name="Submit" value="Register" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table> 
</body>
</html>