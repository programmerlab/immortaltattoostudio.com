<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form action="test.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<input type="file" name="ufile[]" id="filen[]" />
<input type="file" name="ufile[]" id="filen[]" />
<input type="submit" value="submit" id="filen[]" />
</form>
</body>
</html>
<?php 

if($_FILES['ufile']['name'])
{
 
	$c =  count($_FILES['ufile']['name']);
	for($i=0;$i<$c; $i++)
	{
	echo $_FILES['ufile']['name'][$i];
	}

}
?>