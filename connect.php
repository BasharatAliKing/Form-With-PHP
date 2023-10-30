<?php
 
  // $conn=mysqli_connect ("localhost","root","","zeeshan");
  $item=$_POST['item'];
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];

  // Database conn
  $conn=new mysqli('localhost','root','','zeeshan');
  if($conn->connect_error){
   die('connection Failed!'.$conn->connect_error);
  }else{
   $stmt=$conn->prepare("insert into students(item,name,phone,address)
                      values(?,?,?,?)");
                      $stmt->bind_param("ssss",$item,$name,$phone,$address);
                      $stmt->execute();
                      echo "Data Submitted.";
                      $stmt->close();
                      $conn->close();
  }
?>