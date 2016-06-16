<?php

$pickupAddress=$_POST["pickupAddress"];
$pickupDate=$_POST["pickupDate"];

$pickupHour=$_POST["pickupHour"];
$pickupMinute=$_POST["pickupMinute"];
$pickupAMPM=$_POST["pickupAMPM"];

$returnAddress=$_POST["returnAddress"];
$returnDate=$_POST["returnDate"];

$returnHour=$_POST["returnHour"];
$returnMinute=$_POST["returnMinute"];
$returnAMPM=$_POST["returnAMPM"];

$repeat=$_POST["repeat"];



$m = new MongoClient("mongodb://$username:$password@127.0.0.1:27017",
  	array("db" => "admin"));

//$m = new MongoClient();
$coleccion = $m->selectCollection('thisability', 'user');

$findName = array('username' => $username);
$cursor = $collection->find($findName);

if(sizeof($array)){
    $data = array(	"firstName" => $firstName,
                                    "lastName" => $lastName,
                                    "birthdate" => $birthdate,
                                    "gender" => $gender,
                                    "email" => $email,
                                    "address" => $address,
                                    "cityState" => $cityState,
                                    "zip" => $zip,
                                    "country" => $country,
                                    "additionalInfo" => $additionalInfo,
                                    "username" => $username,
                                    "password" => $password

    );
    $coleccion->insert($data);
}
?>