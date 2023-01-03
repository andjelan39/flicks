<?php 

require_once 'konekcija.php';

class Korisnik{

    function logUser(){

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $statement = "SELECT * FROM korisnici WHERE email='$email' AND password ='$password'";
        
        $query = mysqli_query(connection(), $statement);
        $result = mysqli_fetch_assoc($query);
      
        if($result){
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            header('Location: index.php');
        }else{
           echo '<script type="text/javascript">alert("Please enter valid information!")</script>';
        }
    }

    function registerUser(){
        
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $statement = "INSERT INTO korisnici (name,lastname,phone,email,password) VALUES('$name', '$lastname', '$phone','$email', '$password')";
        $query = mysqli_query(connection(), $statement);
        if($query){
        echo '<script type="text/javascript">alert("Successful registration!")</script>';
        header('Location: login.view.php');
        }else{
         echo 'ERROR!';
        }
    }
    

}

?>