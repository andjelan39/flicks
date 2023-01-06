<?php
require_once 'delovi/top.php';
require_once 'delovi/navbar.php';
?>
<div class="text-center p-2 p-md-4">
    <h1>MOVIE LIST</h1>
    <p>Whatever you want to watch, book online ahead of time to save.</p>
</div>

<div class="container">
    <div class="row g-4 py-2">
        <div class="col-12 col-md-6 col-lg-4">
            <h4 class="search-title">Search for a movie here: <a href="search.php" type="button" class="btn btn-floating btn-bdg btn-sm">
            <i class="fa-solid fa-magnifying-glass"></i></a></h4>
        </div>
    </div>

    <div class="row g-4">

        <?php foreach ($filmovi as $film): ?>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <?php echo '<img src="data:image;base64,' . base64_encode($film['image']) . '"'; ?>
                <img class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title"><?php echo $film['naziv']; ?></h1>
                    <p class="card-sub-title">Director: <?php echo $film['reditelj']; ?></p>
                    <p class="card-sub-title">Actors: <?php echo $film['glumci']; ?></p>
                    <p class="card-info"><?php echo $film['opis']; ?></p>
                    <?php if (isset($_SESSION['id'])): ?>
                    <a href="confirmation.php?id=<?php echo $film['id'] ?>" class="card-btn">Book 
                        <i class="fa-regular fa-plus"></i></a>
                    <?php else: ?>
                    <a href="login.php" class="card-btn">Book <i class="fa-regular fa-plus"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </div>
</div>

<br>
<?php require_once 'delovi/footer.php'; ?>