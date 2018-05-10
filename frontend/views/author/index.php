<?php
/* @var $this yii\web\View */
/* @var $authorsList[] frontend\models\Author */

use yii\helpers\Url;
?>
<h1 class="text-center">Список авторов</h1>

<a href="<?=Url::to(['/author/create'])?>" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i> Добавить</a>
<br><br>

<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
<?php foreach ($authorsList as $author): ?>
<tr>
    <td><?= $author->id ?></td>
    <td><?= $author->getFullName() ?></td>
    <td><a href="<?=Url::to(['/author/update', 'id' => $author->id])?>"><i class="glyphicon glyphicon-pencil"></i></a></td>
    <td><a href="<?=Url::to(['/author/delete', 'id' => $author->id])?>"><i class="glyphicon glyphicon-trash"></i></a></td>
</tr>
<?php endforeach; ?>
</table>