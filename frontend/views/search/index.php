<?php
/* @var $model frontend\models\forms\SearchForm */
/* @var $results frontend\models\forms\SearchForm */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\helpers\HighlightHelper;
?>
<h1>Search v2</h1>

<div class="col-md-12">
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'keyword') ?>

<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
</div>
<hr>
<div class="col-md-12">
<?php if ($results): ?>

<?php foreach ($results as $result): ?>
        <h4><?= $result['title'] ?></h4>
        <p><?= HighlightHelper::process($model->keyword, $result['content']) ?></p>
        <hr>
<?php endforeach; ?>

<?php endif; ?>
</div>