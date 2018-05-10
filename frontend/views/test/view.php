<?php
use yii\helpers\Url;
?>
<h2><?=$item['title']?></h2>
<p><?=$item['content']?></p>

<a href="<?=Url::to(['test/index'])?>" class="btn btn-info">Back</a>