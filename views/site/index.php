<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="container ">
    <!-- Introduction -->
    <div class="row">
        <!-- Heading -->
        <div class="col-12">
            <div class="padding-home text-center bg-transparent">
                <h3 class="display-4">Explore the wonders </h3>
                <p class="lead">Let your foot print pave the way</p>
            </div>
        </div>
        <!-- Carousel -->
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide bg-dark" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner padding-home">
                    <div class="carousel-item active">
                        <a class="nav-link p-0 bg-white " href=<?php echo Url::to(['/site/blog']); ?>>
                            <img src="/image/1.jpg" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption d-md-block bg-dark bg-transparent">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <a class="nav-link p-0 bg-white " href=<?php echo Url::to(['/site/blog']); ?>>
                            <img src="/image/2.jpg" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption  d-md-block bg-dark bg-transparent">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a class="nav-link p-0 bg-white " href=<?php echo Url::to(['/site/blog']); ?>>
                            <img src="/image/3.jpg" class="d-block w-100" alt="...">
                        </a>
                        <div class="carousel-caption  d-md-block bg-dark bg-transparent">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?= $this->render('_latest-blog') ?>