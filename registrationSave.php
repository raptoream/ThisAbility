	<?php
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$birthdate=$_POST["birthdate"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$address=$_POST["address"];
$cityState=$_POST["cityState"];
$zip=$_POST["zip"];
$country=$_POST["country"];
$additionalInfo=$_POST["additionalInfo"];
$username=$_POST["username"];
$password=$_POST["password"];

$usernamedb = "admin";
$passworddb = "3ZN8AY53";

$m = new MongoClient("mongodb://$usernamedb:$passworddb@127.0.0.1:27017",
  	array("db" => "admin"));

//$m = new MongoClient();
//$coleccion = $m->selectCollection('thisability', 'user');

//$findName = array('username' => $username);
//$cursor = $collection->find($findName);

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