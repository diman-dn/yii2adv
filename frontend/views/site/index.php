<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\widgets\newsList\NewsList;
use frontend\widgets\employeeList\EmployeeList;

$this->title = 'Yii2 Frontend';
?>
<div class="site-index">

  <div class="jumbotron">
    <h1>Congratulations!</h1>

      <?php

      ?>

    <p class="lead">You have successfully created your Yii-powered application.</p>

    <p><a class="btn btn-lg btn-success" href="<?= Url::to(['newsletter/subscribe']) ?>">Subscribe to newsletter</a></p>
  </div>

  <div class="body-content">

    <div class="row">
      <div class="col-lg-4">
        <h2>News</h2>

        <?= NewsList::widget(['showLimit' => 2]) ?>

      </div>
      <div class="col-lg-4">
        <h2>Top employees</h2>

        <?= EmployeeList::widget(['showLimit' => 5]) ?>

      </div>
      <div class="col-lg-4">
        <h2>Search</h2>

          <a href="<?= Url::to(['search/index']) ?>" class="btn btn-info">Search v2</a>
          <a href="<?= Url::to(['search/advanced']) ?>" class="btn btn-info">Search v3 Sphinx</a>

      </div>
    </div>

  </div>
</div>
