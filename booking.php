<?php 
require 'kontroler.php';

if(isset($_SESSION['id'])){
    $id_korisnika=$_SESSION['id'];
}

$filmovi=$rezervacija->getAllFromUser($id_korisnika);

$id_filmovi=array();

for($i=0;$i<sizeof($filmovi);$i++){
  
   array_push($id_filmovi, $filmovi[$i]);

}

$ids=array();
foreach($id_filmovi as $id){
    array_push($ids, $id['id_film']);
}

require 'booking.view.php';
?>