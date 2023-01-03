<?php
require_once 'delovi/top.php';
require_once 'delovi/navbar.php';
?>

<div class="container">
    <div class="row justify-content-center align-items-center inner-row2">
        <div class="col-lg-5 col-md-7">
            <div class="form-box p-md-5 p-3">
                <div class="form-title">
                    <h2 class="fw-bold mb-3">Confirm Your Selection</h2>
                </div>
                <div class="mt-3 py-2">
                   <h5>Are you sure you want to book seats for <?php echo $movie['naziv']; ?>? </h5>
                </div>
                <div class="mt-3">
                    <button type="button" id="confirm" value="<?php echo $movie['id']?>" class="btn btn-success">Confirm</button>
                    <button type="button" id="cancel" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'delovi/footer.php'; ?>

<script>
    $(document).ready(function(){
    $('#confirm').click(function(){
        var id_film=$(this).val();
        var ajaxurl = 'confirmation.php';
        data={'id_film' : id_film};
        $.post(ajaxurl, data, function(response) {
            alert ("Movie successfully added to your collection!");
       window.location.replace("booking.php");
        })
    })
});
$('#cancel').click(function(){
    window.location.replace("collection.php");
});
</script>