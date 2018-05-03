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
<h1>Welcome to our company!</h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'firstName'); ?>
    <?= $form->field($model, 'lastName'); ?>
    <?= $form->field($model, 'middleName'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'birthDate')->hint('Example: 1970-01-01'); ?>
    <?= $form->field($model, 'startDate')->hint('Example: 1970-01-01'); ?>
    <?= $form->field($model, 'position'); ?>
    <?= $form->field($model, 'idCode'); ?>
    <?= $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>

    <?= Html::submitButton('Register', ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>

</div>