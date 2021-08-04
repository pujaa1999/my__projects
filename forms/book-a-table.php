<?php
  
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"contact");
if(isset($_POST["submit"]))
{
  $a=$_POST["name"];
  $b=$_POST["email"];
  $c=$_POST["phone"];
  $d=$_POST["date"];
  $e=$_POST["time"];
  $f=$_POST["people"];
  $g=$_POST["message"];
  
  


  $sql="insert into book_table(name,email,phone,date,time,people,message) values ('$a','$b','$c','$d', '$e', '$f', '$g')";
  if (mysqli_query($db,$sql))
   {
    echo "data has been send";
  }
if($a!=''&& $b!=''&& $c!=''&& $d!='')
   {
    header("location:http://localhost/Restaurant_design/index.html");
  }
  else{
    ?><span><?php echo "please fill all fields";?></span><?php
}
}
?>
