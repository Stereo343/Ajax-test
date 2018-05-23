<?php
/**
 * Created by PhpStorm.
 * User: Stereo
 * Date: 23/05/2018
 * Time: 14:19
 */
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=yoloajax', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

header("Content-Type: multipart/form-data");
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : "";
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";
var_dump($firstname);
var_dump($lastname);
var_dump($email);
var_dump($password);
if ($firstname != "" && $lastname != "" && $email != "" && $password != "") {
    $req = $bdd -> prepare ('INSERT INTO ajaxTest(firstname, lastname, email, password) VALUES(:firstname, :lastname, :email, :password)');
    $req -> execute (array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $password));
    echo "EEEEEEET CA VROUUUUUUM PUTAIN";
} else {
    echo "et meeeerde ça plante";
}
?>