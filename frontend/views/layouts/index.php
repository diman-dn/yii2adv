<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>"><?= Yii::$app->name ?></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['site/index']) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['site/about']) ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['test/index']) ?>">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['site/contact']) ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>

    <?= Alert::widget() ?>
    <?= $content ?>

    <hr>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
            <p class="col">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

            <p class="col"><?= Yii::powered() ?></p>
            </div>
        </div>

        <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>