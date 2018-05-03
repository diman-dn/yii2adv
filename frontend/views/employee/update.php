<?php
/* @var $model frontend\models\Employee */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if ($model->hasErrors()) {
    echo "<div class='bg-danger'>";
    foreach ($model->getErrors() as $error) {
        echo "<p>{$error[0]}</p>";
    }
    echo "</div>";
}
?>
<div class="container">
    <br>
    <br>
    <h1>Update your details</h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstName'); ?>
    <?= $form->field($model, 'lastName'); ?>
    <?= $form->field($model, 'middleName'); ?>
    <?= $form->field($model, 'birthDate'); ?>
    <?= $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>
    <?= $form->field($model, 'position'); ?>

    <?= Html::submitButton('Update', ['class' => 'btn btn-primary']); ?>

    <?php ActiveForm::end(); ?>
</div>
