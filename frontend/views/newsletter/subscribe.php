<?php
    /* @var $model frontend\models\Subscribe */

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