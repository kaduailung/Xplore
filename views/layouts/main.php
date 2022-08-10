<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php echo $this->render('_navbar') ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <?= $content ?>
    </main>

    <footer class="footer mt-auto  ">
        <?php echo $this->render('_footer') ?>
        <!-- <div class="container">
            <p class="float-left">&copy; My Company <?= '' //date('Y') 
                                                    ?></p>
            <p class="float-right">@</p>
        </div> -->
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>