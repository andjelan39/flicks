<?php
require_once 'delovi/top.php';
require_once 'delovi/navbar.php';
?>
<div class="text-center p-2 p-md-4">
    <h1>Looking for a movie?</h1>
    <p>Search our movie collection by your favourite genre right here.</p>
</div>

<div class="container">
    <div class="row g-4 py-2">
        <div class="col-12 col-md-6 col-lg-4" id="filters">
            <div class="custom-select">
                <select name="fetchval" id="fetchval">
                    <option value="" disabled="" selected="">Select Filter</option>
                    <option value="Action">Action</option>
                    <option value="Drama">Drama</option>
                    <option value="Crime">Crime</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Romance">Romance</option>
                    <option value="Horror">Horror</option>
                </select>
                <span class="custom-arrow"></span>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-sortable content-table">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Description</th>
                <th>Director</th>
                <th>Genre</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
    <br>
</div>

<?php require_once 'delovi/footer.php'; ?>

<script type="text/javascript">
    $(document).ready(function () {
        $("#fetchval").on('change', function () {
            var value = $(this).val();
            //alert(value);

            $.ajax({
                url: "searchbygenre.php",
                type: "POST",
                data: 'request=' + value,
                success: function (data) {
                    $(".content-table").html(data);
                }
            });
        });
    });
</script>