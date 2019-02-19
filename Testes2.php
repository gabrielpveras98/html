<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 13/02/19
 * Time: 15:20
 */

$email = $_POST['email'];
$senha = $_POST['senha'];
$id = $_GET['id'];

echo $email.$senha.$id;
