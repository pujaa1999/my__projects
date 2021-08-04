<?php
  
$db=mysqli_connect("localhost","root","");
mysqli_select_db($db,"contact");
if(isset($_POST["submit"]))
{
  $a=$_POST["name"];
  $b=$_POST["email"];
  $c=$_POST["subject"];
  $d=$_POST["message"];
  
  


  $sql="insert into contact1(name,email,subject,message) values ('$a','$b','$c','$d')";
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
