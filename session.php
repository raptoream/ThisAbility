<?php
session_start();
$usernamedb = "admin";
$passworddb = "3ZN8AY53";

$username=$_POST["username"];
$password=$_POST["password"];

$m = new MongoClient("mongodb://$usernamedb:$passworddb@127.0.0.1:27017",
  	array("db" => "admin"));

$coleccion = $m->selectCollection('thisability', 'user');

$findName = array('username' => $username, '$password' => $password);
$cursor = $collection->find($findName);

foreach ($cursor as $doc) {
    var_dump($doc);
}

?>
