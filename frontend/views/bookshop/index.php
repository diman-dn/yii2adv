<?php
/* @var $this yii\web\View */
/* @var $bookList[] frontend\models\Book */

use yii\helpers\Url;

?>
<h1 class="text-center">Список книг</h1>

<a href="<?= Url::to(['create']); ?>" class="btn btn-info">Добавить книгу</a>
<?php foreach ($bookList as $book): ?>
    <div class="col-md-10">
        <h3><?= $book->name ?></h3>
        <p>Дата публикации: <?= $book->getDatePublished(); ?></p>
        <p>Издатель: <?= $book->getPublisherName(); ?></p>
        <div>Автор:
        <ul class="list-inline">
    <?php foreach ($book->getAuthors() as $author): ?>
        <li><?= $author->getFullName() ?></li>
    <?php endforeach; ?>
        </ul>
        </div>
        <hr>
    </div>
<?php endforeach; ?>