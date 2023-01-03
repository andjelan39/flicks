<?php 

require 'kontroler.php';

$filmovi = $film->getAll();

require 'collection.view.php';

?>