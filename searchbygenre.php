<?php
include('konekcija.php');

if (isset($_POST['request'])) {

    $request = $_POST['request'];

    $query = "SELECT * FROM filmovi WHERE zanr = '$request'";
    $result = mysqli_query(connection(), $query);
    $count = mysqli_num_rows($result);


?>
 <table class="table table-sortable content-table">

    <?php

    if ($count) {

    ?>
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Description</th>
            <th>Director</th>
            <th>Genre</th>
            <th></th>
        </tr>
        <?php
    } else {
        echo "Sorry! No movies found!";
    }
        ?>
    </thead>
    
    <tbody>
        <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['naziv']; ?></td>
            <td><?php echo $row['opis']; ?></td>
            <td><?php echo $row['reditelj']; ?></td>
            <td><?php echo $row['zanr']; ?></td>
            <td><a type="button" class="btn btn-floating btn-bdg btn-lg footer-btn" href="collection.php"><i
                class="fa-solid fa-photo-film"></i></a></td>
        </tr>
        <?php
    }
        ?>
    </tbody>
</table>
<?php
}?>