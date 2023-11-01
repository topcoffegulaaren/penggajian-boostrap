<?php
require 'config/config.php';
require 'config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include 'template/head.php';
?>

<!-- Navbar -->
<?php
include 'template/navbar.php';
?>
<!-- End Navbar -->

<body>
<h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Welcome...!</h1>

    <!--card-->
    <section id="card">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col mb-5">
                    <div class="card h-100">
                        <img src="C:\Users\niagahoster\Pictures\website3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hosting</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                                This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-center">
                        <img src="C:\Users\niagahoster\Pictures\website2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Domain</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100 text-end">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Website</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                                This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <?php
include 'template/footer.php';
?>
    <!--end footer-->
    <!--End card-->
    <?php
include 'template/script.php';
?>
</body>


</html>