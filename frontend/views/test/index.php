<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
<?php foreach ($list as $item): ?>
    <div class="post-preview">
        <a href="<?= Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]) ?>">
            <h2 class="post-title">
                <?= $item['title'] ?>
            </h2>
        </a>
        <p class="sub-header"><?= $item['content'] ?></p>
    </div>
    <hr>
<?php endforeach; ?>
        </div>
    </div>
</div>