<?php
/* @var $this yii\web\View */
/* @var $book frontend\models\Book */
/* @var $publishers[] frontend\models\Book */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

?>
<h2 class="text-center">Добавление новой книги</h2>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($book, 'name'); ?>
<?= $form->field($book, 'isbn'); ?>
<?= $form->field($book, 'date_published')->widget(
        DatePicker::className(), [
            // inline too, not bad
            'inline' => true,
            // modify template for custom rendering
            'template' => '<div class="well well-sm" style="background-color: #fff; width: 250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
            ]
    ]); ?>

<?= $form->field($book, 'publisher_id')->dropDownList($publishers); ?>

<?= Html::submitButton('Save', [
    'class' => 'btn btn-primary',
]); ?>

<?php ActiveForm::end(); ?>