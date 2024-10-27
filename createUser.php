<?php
include_once 'queries.php';
include_once 'register.php';
$database=new Database();
$db=$database->getConnection();
$item=new Library($db);
if($_SERVER['REQUEST_METHOD']=='POST'){
$item->usfname=$_POST['first_name'];
$item->uslname=$_POST['last_name'];
$item->usphone=$_POST['phone'];
$item->usdcmnum=$_POST['document_number'];
$item->uspassword=$_POST['password'];
if($item->createUser()){
        echo "User connected acsessfully.";
    }
else{
    echo "User could not be created.";
}
}
?>