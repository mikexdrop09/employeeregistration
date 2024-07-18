<?php
include ('./components/header.php');
?>

<div class="container">

    <form action="./endpoint/add-employee.php" method="POST">

        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel"
            data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php
                    include ('./login/step-one.php');
                    ?>
                    <br>
                </div>
                <div class="carousel-item">
                    <?php
                    include ('./login/step-two.php');
                    ?>
                    <br>
                </div>

                <div class="carousel-item">
                    <?php
                    include ('./login/step-three.php');
                    ?>
                    <br>
                </div>


                <div class="carousel-item">
                    <?php
                    include ('./login/step-four.php');
                    ?>
                    <br>
                </div>


                <div class="carousel-item">
                    <?php
                    include ('./login/step-five.php');
                    ?>
                    <br>
                </div>

                <div class="carousel-item">
                    <?php
                    include ('./login/step-six.php');
                    ?>
                    <br>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </form>

</div>
<?php
include ('./components/footer.php');
?>