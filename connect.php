<?php 

$Name=$_POST['Name'];
$Number=$_POST['Number'];
$Message=$_POST['Message'];

$conn=new mysqli('localhost','root','test2');
if($conn->connect_error){
    die('Connection Failed: '.conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into connectform(Name,Number,Message) values(?,?,?)");
    $stmt->bind_param("sis",$Name,$Number,$Message);
    $stmt->execute();
    echo "Connect Form Worked";
    $stmt->close();
    $conn->close();

}
?>