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
        <h2>Heading</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur.</p>

        <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
      </div>
    </div>

  </div>
</div>
