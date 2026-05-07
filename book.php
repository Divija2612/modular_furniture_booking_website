<?php
$conn = new mysqli("localhost","root","","decorx");

if($conn->connect_error){
    die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$furniture = $_POST['furniture_type'];
$date = $_POST['booking_date'];
$address = $_POST['address'];

$sql = "INSERT INTO bookings (name,email,phone,furniture_type,booking_date,address)
        VALUES ('$name','$email','$phone','$furniture','$date','$address')";

if($conn->query($sql)){
    echo "Booking Successful! <br><a href='index.html'>Go Back</a>";
} else {
    echo "Error";
}
?>