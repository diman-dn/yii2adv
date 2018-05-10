<?php
/* @var $comments array */

use yii\helpers\Html;

if ($model->hasErrors()) {
    echo "<div class='bg-danger'>";
    foreach ($model->getErrors() as $error) {
        echo "<p>{$error[0]}</p>";
    }
    echo "</div>";
}

?>
<style>
    textarea {
        resize: none;
    }

    .comment {
        box-shadow: 2px 2px 7px #ccc;
        transition: 500ms ease;
        color: #000;
    }

    .comment:hover {
        box-shadow: 2px 2px 10px #bbb;
    }

    .cm {
        color: #555;
    }
</style>
<div class="container">
    <br>
    <br>
    <h2>Последние комментарии</h2>
    <div class="comments">
        <?php foreach ($comments as $comment): ?>
            <blockquote class="comment col">
                <?php if ($comment['email'] != null): ?>
                    <p>Имя: <a
                                href="mailto:<?= Html::encode($comment['email']) ?>"><b
                                    class="cm"><?= Html::encode($comment['name']) ?></b></a>
                    </p>
                <?php else: ?>
                    <p>Имя: <b class="cm"><?= Html::encode($comment['name']) ?></b></p>
                <?php endif; ?>
                <p>Комментарий: <?= Html::encode($comment['comment']) ?></p>
            </blockquote>
        <?php endforeach; ?>
    </div>
    <hr>
    <form method="post" class="form-horizontal col-md-4">
        <p>Поля помеченные * обязательны</p>
        <p>*Ваше имя:</p>
        <input type="text" name="name" placeholder="John Johnson" class="form-control">
        <p>Ваш email:</p>
        <input type="email" name="email" placeholder="email@example.com" class="form-control">
        <p>*Ваш комментарий:</p>
        <textarea name="comment" placeholder="Comment..." maxlength="250" class="form-control" rows="3"></textarea>
        <br>
        <input type="submit" name="submit" value="Submit" class="btn btn-info">
    </form>
</div>