<?php

use yii\helpers\Url;
?>

<!-- latest blog-->
<div class="container-fluid  pb-5">

    <div class="row ">
        <div class="col-12">

            <!-- Blog Content -->
            <div class="row my-5">
                <div class="col-10  ">
                    <h1>Latest blog</h1>
                </div>
                <div class="col-2 see-more"><a href=<?php echo Url::to(['/site/blog']); ?>> see all > </a> </div>
            </div>
            <div class="row">
                <!-- Blog One -->
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-center">Blog 1</h2>
                        </div>
                        <div class="card-body">
                            <a href="<?= Url::to(['/site/blog']); ?>"><img class="img-fluid" src=" /image/1.jpg" alt="img"></a>
                            <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus reprehenderit dolor rerum? Facilis aliquid corporis tenetur illum. Minima reprehenderit voluptates harum dignissimos, voluptatum pariatur qui voluptatem atque distinctio omnis reiciendis. Quam porro, unde ex molestiae quos suscipit nihil, soluta obcaecati architecto commodi perspiciatis modi fuga voluptas non. Natus, tempora doloremque!</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Two -->
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-center">Blog 2</h2>
                        </div>
                        <div class="card-body">
                            <a href="<?= Url::to(['/site/blog']); ?>"><img class="img-fluid" src=" /image/2.jpg" alt="img"></a>
                            <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus reprehenderit dolor rerum? Facilis aliquid corporis tenetur illum. Minima reprehenderit voluptates harum dignissimos, voluptatum pariatur qui voluptatem atque distinctio omnis reiciendis. Quam porro, unde ex molestiae quos suscipit nihil, soluta obcaecati architecto commodi perspiciatis modi fuga voluptas non. Natus, tempora doloremque!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-center">Blog 2</h2>
                        </div>
                        <div class="card-body">
                            <a href="<?= Url::to(['/site/blog']); ?>"><img class="img-fluid" src=" /image/3.jpg" alt="img"></a>
                            <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus reprehenderit dolor rerum? Facilis aliquid corporis tenetur illum. Minima reprehenderit voluptates harum dignissimos, voluptatum pariatur qui voluptatem atque distinctio omnis reiciendis. Quam porro, unde ex molestiae quos suscipit nihil, soluta obcaecati architecto commodi perspiciatis modi fuga voluptas non. Natus, tempora doloremque!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h2 class="text-center">Blog 2</h2>
                        </div>
                        <div class="card-body">
                            <a href="<?= Url::to(['/site/blog']); ?>"><img class="img-fluid" src="/image/1.jpg" alt="img"></a>
                            <p class="mb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus reprehenderit dolor rerum? Facilis aliquid corporis tenetur illum. Minima reprehenderit voluptates harum dignissimos, voluptatum pariatur qui voluptatem atque distinctio omnis reiciendis. Quam porro, unde ex molestiae quos suscipit nihil, soluta obcaecati architecto commodi perspiciatis modi fuga voluptas non. Natus, tempora doloremque!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>