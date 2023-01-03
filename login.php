<?php 
require 'kontroler.php';

if(isset($_SESSION['id'])){
    header('Location:index.php');
}

if(isset($_POST['loginBtn'])){
    $korisnik->logUser();
}

require 'login.view.php';
?>