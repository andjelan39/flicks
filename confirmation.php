<?php 

require_once 'kontroler.php';

$id_film = $_GET['id'];

$movie = $film->getMovie($id_film);

require_once 'confirmation.view.php';

if(isset($_POST['id_film'])){
    $id_film=$_POST['id_film'];
    $rezervacija->newReservation($id_film);
}
?>