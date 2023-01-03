<?php 

require_once 'konekcija.php';

class Rezervacija{

    function getAllFromUser($id_korisnika){
        
        $statement = "SELECT id_film FROM rezervacije WHERE id_korisnik='$id_korisnika'";

        $query = mysqli_query(connection(), $statement);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
       
        return $result;
    }

    public function newReservation($id_film){

        $id_korisnik=$_SESSION['id'];
        //echo $id_korisnik;
        //echo $id_film;
        $statement="INSERT INTO rezervacije VALUES('$id_korisnik', '$id_film')";

        $query = mysqli_query(connection(), $statement);
        
        if($query){
            return true;
        }else{
            return false;
        }
        
    }

    public function removeReservation($id_film){

        $id_korisnik=$_SESSION['id'];
        $statement="DELETE FROM rezervacije WHERE id_korisnik='$id_korisnik' AND id_film='$id_film'";

        $query = mysqli_query(connection(), $statement);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }

}

?>