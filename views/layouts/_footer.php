<?php



use yii\helpers\Url;

?>
<div class="container-fluid bg-dark pt-5 ">
    <div class="row  ">
        <div class="col-6 col-md-5 col-lg-3">
            <h4 class="app-footer-heading ">Short Links</h4>
            <ul class="app-footer-list pl-0 py-3 ">
                <li><a href="">Latest Blog</a></li>
                <li><a href="">History</a></li>
                <li><a href="">Places</a></li>
            </ul>
        </div>
        <div class="col-6 col-md-5 col-lg-3">
            <h4 class="app-footer-heading ">Socials</h4>
            <ul class="app-footer-list pl-0 py-3 ">
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Instagram</a></li>
            </ul>
        </div>

        <div class="col-6 col-md-5 col-lg-3">
            <h4 class="app-footer-heading ">Contact</h4>
            <ul class="app-footer-list pl-0 py-3 ">
                <li><a href="">+91 900909000</a></li>
                <li><a href="">random@gmail.com</a></li>
                <li><a href="">tarung, thangmeiban.</a></li>
            </ul>
        </div>


        <div class="col-6 col-md-5 col-lg-3">
            <h4 class="app-footer-heading ">About</h4>
            <p class="py-3 app-footer-about ">
                <a href="<?= Url::to('/site') ?>">Xplore</a> places and event of the world. The main aim of Xplore is to share and let the people know that
                there is alot of the world that you can explore.
                <a href="<?php echo Url::to(['/site/about']); ?>">more...</a>
            </p>
        </div>
    </div>
</div>

<!-- <div class="footer-container"> -->
<!-- 
    <div class="short-links">
        <h1>Short links</h1>
        <a href="">Latest blog</a>
        <a href="">History</a>
        <a href="">Places</a>
    </div> -->
<!-- <div class="socials">
        <h1>Socials</h1>
        <a href="">fb</a>
        <a href="">instagram</a>
        <a href="">twitter</a>
    </div> -->
<!-- <div class="about-footer">
        <h1>About</h1>
        <p><span><a href="<?php echo '' //Url::to(['/site']); 
                            ?>">Xplore</a></span> is a blogging website that provides and share the exciting and amazing
            places and event of the world. The main aim of Xplore is to share and let the people know that
            there is alot of the world that you can explore.
            <a href="<?php echo '' //Url::to(['/site/about']); 
                        ?>">more...</a>
        <p>
    </div> -->
<!-- </div> -->