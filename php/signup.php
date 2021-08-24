<?php
include('../conn.php');
$email=$_POST['email'];
$uname=$_POST['uname'];
$sex=$_POST['sex'];
$psw=$_POST['psw']; 
$psw2=$_POST['psw2']; 
if ($psw !== $psw2){
  echo '<script>alert("كلمة المرور ليست متطابقة");window.location.assign("../signup.php");</script>';
    exit();
}
$sql="select * from wusers where  email='$email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
$count = $result->num_rows;
}
if ($count>0) {
    echo '<script>alert("يرجى اعادة المحاولة الايميل مستخدم سابقا");window.location.assign("../signup.php");</script>';
    exit();   

}
else{
$sql="INSERT INTO wusers (email,paw,sex,uname)
VALUES('$email','$uname','$sex','$psw')";
$result = $conn->query($sql);
    header('Location:http://localhost/proj/indexx.php');
}

?>