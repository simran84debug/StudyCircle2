<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $password=$_POST['password'];
    $dob=$_POST['date'];

    $file="registration.json";
    if(!file_exists($file)){
        file_put_contents($file,"[]");
    }

    $currentData=json_decode(file_get_contents($file),true);
    $newEntry=[
    "name"=> $name,
    "email"=>$email,
    "mobile"=>$phone,
    "password"=>$password,
    "date"=>$date,
    ];
    $currentData[]=$newEntry;

    file_put_contents($file,json_encode($currentData,JSON_PRETTY_PRINT));
    echo"Registration Successful!";
}
?>