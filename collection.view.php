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
            <select name="genre_list" id="genre_list" class="form-control py-3 px-4">
                <option value="Action">Action</option>
                <option value="Drama">Drama</option>
                <option value="Crime">Crime</option>
                <option value="Thriller">Thriller</option>
                <option value="Comedy">Comedy</option>
                <option value="Romance">Romance</option>
                <option value="Horror">Horror</option>
            </select>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <button type="button" name="search" id="search" class="btn btn-floating btn-bdg py-3 px-4">
            <i class="fa-solid fa-magnifying-glass"></i></button>
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