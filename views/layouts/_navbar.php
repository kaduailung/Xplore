<?php

use yii\helpers\Url;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky">
    <a class="navbar-brand" href=<?php echo Url::to(['/site']); ?>>Xplore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href=<?php echo Url::to(['/site']); ?>>Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=<?php echo Url::to(['/site/about']); ?>>About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-expanded="false">
                    Blog
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="<?= Url::to(['/site/places']); ?>">Places</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Url::to(['/site/blog']); ?>">Famous Person</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= Url::to(['/site/blog']); ?>">Culture</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= Url::to(['/site/contact']); ?>">Contact</a>
            </li>
        </ul>

    </div>
</nav>