<?php
require_once 'delovi/top.php';
require_once 'delovi/navbar.php';
?>

<div class="container">
    <div class="row justify-content-center align-items-center inner-row1">
        <div class="col-lg-5 col-md-7">
            <div class="form-box p-md-5 p-3">
                <div class="form-title">
                    <h2 class="fw-bold mb-3">Create Your Account</h2>
                </div>
                <form action="register.php" method="POST" onsubmit="return validate()">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="First Name" id="name" name="name">
                        <label for="name">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Last Name" id="lastname" name="lastname">
                        <label for="lastname">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Phone Number" id="phone" name="phone">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="Email" id="email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control form-control-sm" placeholder="Password"
                            id="password" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-bdg" name="registerBtn">Sign Up</button>
                    </div>
                </form>
                <div class="mt-3">
                    <span>Already have the account?</span>
                    <a type="button" class="p-0 border-0 bg-transparent" href="login.view.php">Log In</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'delovi/footer.php'; ?>

<script>
    function validate() {
        var name = document.getElementById("name").value;
        var lastname = document.getElementById("lastname").value;
        var phone = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        
        if(name == ""){
            alert("Name cannot be empty!")
            return false;
        }
        if(lastname == ""){
            alert("Last Name cannot be empty!")
            return false;
        }
        if(phone == ""){
            alert("Please enter your phone number!")
            return false;
        }
        if(email == ""){
            alert("Please enter your email!")
            return false;
        }
        if(password == ""){
            alert("Please enter your password!")
            return false;
        }
        return true;
    }
</script> 