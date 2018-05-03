<?php
    /* @var $this yii\web\View */
    /* @var $model frontend\models\Subscribe */

    $this->title = 'Подписка на новости.';
    $this->registerMetaTag([
            'name' => 'description',
        'content' => 'Description of the page...',
    ]);

    $this->params['breadcrumbs'] = [
            'Подписка',
    ];

    if ($model->hasErrors()) {
        echo "<div class='bg-danger'>";
        foreach ($model->getErrors() as $error) {
            echo "<p>{$error[0]}</p>";
        }
        echo "</div>";
    }
?>
<form method="post">
    <p>Email:</p>
    <input type="text" name="email">
    <br><br>
    <input type="submit">
</form>