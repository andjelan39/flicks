<?php
require_once 'delovi/top.php';
require_once 'delovi/navbar.php';
?>

<div class="text-center p-2 p-md-4">
    <h1>MY MOVIES</h1>
    <p>A list of movies that you booked.</p>
</div>

<div class="container">
    <div class="row g-4">

        <?php foreach ($ids as $id):
            $movie = $film->getMovie($id) ?>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <?php echo '<img src="data:image;base64,' . base64_encode($movie['image']) . '"'; ?>
                <img class="card-img" alt="">
                <div class="card-body">
                    <h1 class="card-title"><?php echo $movie['naziv']; ?></h1>
                    <p class="card-sub-title">Director: <?php echo $movie['reditelj']; ?></p>
                    <p class="card-sub-title">Actors: <?php echo $movie['glumci']; ?></p>
                    <p class="card-info"><?php echo $movie['opis']; ?></p>
                    <a href="remove.php?id=<?php echo $movie['id']?>" class="card-btn">Remove <i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
        </div>

        <?php endforeach; ?>

    </div>
</div>
<br>
<?php require_once 'delovi/footer.php'; ?>