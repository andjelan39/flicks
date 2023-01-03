<?php
require_once 'delovi/top.php';
require_once 'delovi/navbar.php';
?>

<div class="container">
    <div class="row justify-content-center align-items-center inner-row">
        <div class="col-lg-5 col-md-7">
            <div class="form-box p-md-5 p-3">
                <div class="form-title">
                    <h2 class="fw-bold mb-3">Login</h2>
                </div>
                <form action ="login.php" method="POST" onsubmit="return check()">
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
                        <button type="submit" class="btn btn-bdg" name="loginBtn">Login</button>
                    </div>
                </form>
                <div class="mt-3">
                    <span>Don't have the account?</span>
                    <a type="button" class="p-0 border-0 bg-transparent" href="register.view.php">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'delovi/footer.php'; ?>

<script>
    function check() {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

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
