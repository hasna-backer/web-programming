<html>
<body>
<h2>Registration</h2>

<?php
if(isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","root","","book");
$bno=$_POST["bno"];
$name=$_POST["name"];
$author=$_POST["author"];
$price=$_POST["price"];


$sql="INSERT INTO book1(bno, name, author, price) VALUES ($bno, '$name', '$author', $price)";
$result=mysqli_query($con,$sql);

if($result)
{
echo"<script>alert('successfully registered.....')</script>";
}
}
?>
<form method="post" action="#">
bno:<input type="text" name="bno"><br>
name:<input type="text" name="name"><br>
author:<input type="text" name="author"><br>
price:<input type="text" name="price"><br>
<input type="submit" name="submit"><br>
</form>
</body>
</html>

