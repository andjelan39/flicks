<nav class="navbar navbar-expand-lg navbar-bgd p-2" id="headerNav">
    <div class="container-fluid">
        <a class="navbar-brand d-block d-lg-none" href="#">
            <img src="flicks.png" height="80" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a style="color: #ffffff;" class="nav-link mx-3" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a style="color:  #ffffff;" class="nav-link mx-3" href="collection.php">Movies</a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link mx-2" href="index.php">
                        <img src="flicks.png" height="80" />
                    </a>
                </li>
                <?php if(isset($_SESSION['id'])): ?>
                <li class="nav-item">
                    <a style="color: #ffffff;" class="nav-link mx-3" href="booking.php"><?php echo $_SESSION['name']; ?>
                    <i class="fa-solid fa-user"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: #ffffff;" class="nav-link mx-3" href="logout.php">Log Out  
                    <i class="fa-solid fa-right-from-bracket"></i></a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a style="color: #ffffff;" class="nav-link mx-3" href="register.view.php">Sign Up
                    <i class="fa-solid fa-user"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: #ffffff;" class="nav-link mx-3" href="login.view.php">Log In  
                    <i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>