
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title> Contact Details </title>
</head>
<body bgcolor = "#CCFFFF" text = "#660099">
<?php
$self = $_SERVER['PHP_SELF'];
$dbh = mysqli_connect("localhost", "root", "","tenth");
if(isset($_POST['submit'])){
 $nme = $_POST['name'];
 $ad1 = $_POST['add1'];
 $ad2 = $_POST['add2'];
 $eml = $_POST['email'];
 
if($nme != "" && $ad1 != "")
 {
 $query = "INSERT INTO contact VALUES('$nme', '$ad1', '$ad2', '$eml')";
 $result =$dbh->query($query);
 header("Location: /tenthpgm/index.html");
 die();
 }
 else
 echo "<p>One of the required fields is empty!";
}
?>

<form action="<?=$self?>" method = "POST">
<h1> Enter the contact Details </h1>
<p> Go to <a href="/tenthpgm/index.html">Menu</a></p>
<table>
 <tr>
 <td> Name </td>
 <td><input type="text" name="name" />*</td>
 </tr>
 <tr>
 <td> Address Line 1 </td>
 <td> <input type="text" name="add1" />*</td>
 </tr>
 <tr>
 <td> AddressS Line 2 </td>
 <td> <input type="text" name="add2" value="" /></td>
 </tr>
 <tr>
 <td> Email </td>
 <td> <input type="text" name="email" value=""/><BR>
 </tr>
 <tr>
 <td colspan="2" align = "center"> 
<input type="submit" value="SUBMIT" />
 <input type="hidden" name="submit" value="yes" />
 </td>
 </tr>
</table>
</form>
<p style="font-style: italic; color:blue"> * Required Fields </p>
</body>
</html>
