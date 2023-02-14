<?php

$connection = New PDO("mysql:host=localhost;dbname;book_db","root","");
$connection->exec("set names utf8");
echo'conexion exitosa';







   // $connection = mysqli_connect('localhost','root','','book_db');

   // if(isset($_POST['send'])){
   //    $name = $_POST['name'];
   //    $email = $_POST['email'];
   //    $phone = $_POST['phone'];
   //    $address = $_POST['address'];
   //    $location = $_POST['location'];
   //    $guests = $_POST['guests'];
   //    $arrivals = $_POST['arrivals'];
   //    $leaving = $_POST['leaving'];

   //    $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
   //    mysqli_query($connection, $request);

   //    header('location:reserva.html'); 

   // }else{
   //    echo 'algo ha ido mal ¡por favor, inténtelo de nuevo!';
   // }

?>