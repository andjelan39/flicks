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
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="First Name" id="name">
                        <label for="name">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Last Name" id="lastname">
                        <label for="lastname">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control form-control-sm" placeholder="Phone Number" id="phone">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control form-control-sm" placeholder="Email" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control form-control-sm" placeholder="Password"
                            id="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-bdg">Sign Up</button>
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