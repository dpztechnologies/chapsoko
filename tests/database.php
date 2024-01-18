<?php

function connect()
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=chapsoko;port=3306;", "root", "");

        return $conn;

    } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
    }
}

print_r($_POST);
// connect();

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phonenumber = $_POST["phone-number"];
$username = $_POST["username"];
$password = $_POST["password"];
$cid = uniqid();
$conn = connect();

$insertPInfo = "insert into c_personal_info (C_id,c_firstname,c_lastname,c_email,c_phone_number) values(?,?,?,?,?)";

$stmt = $conn->prepare($insertPInfo);

$stmt->bindParam(1, $cid);
$stmt->bindParam(2, $firstname);
$stmt->bindParam(3, $lastname);
$stmt->bindParam(4, $email);
$stmt->bindParam(5, $phonenumber);

$stmt->execute();