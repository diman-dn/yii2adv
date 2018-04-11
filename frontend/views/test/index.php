<?php foreach ($list as $item): ?>

  <h2><a href="<?=Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']])?>"><?=$item['title']?></a></h2>
    <p><?=$item['content']?></p>

    <hr>

<?php endforeach; ?>
