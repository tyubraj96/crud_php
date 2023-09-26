<?php
$conn =mysqli_connect("localhost","root","","crud") or die("unable to connect");
 $name = $_POST['sname'];
 $address = $_POST['saddress'];
 $class= $_POST['class'];
 $phone= $_POST['sphone'];

 $sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('$name',' $address','$class',' $phone')";
 $result = mysqli_query($conn, $sql) or die("query unsuccessful");
   header("location: http://localhost/crud_html/index.php");
 mysqli_close($conn);

?>