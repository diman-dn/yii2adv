<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
    echo "<div class='bg-danger'>";
    foreach ($model->getErrors() as $error) {
        echo "<p>{$error[0]}</p>";
    }
    echo "</div>";
}
?>
<h1>Choose options for your window</h1>

<form method="post">
    <p>Width (70 - 210cm):</p>
    <input type="text" name="width">
    <br><br>

    <p>Height (100 - 200cm):</p>
    <input type="text" name="height">
    <br><br>

    <p>Sections:</p>
    <p><input type="radio" name="section" value="1">&nbsp;One section</p>
    <p><input type="radio" name="section" value="2">&nbsp;Two sections</p>
    <p><input type="radio" name="section" value="3">&nbsp;Three sections</p>
    <br><br>

    <p>Total number of flaps:</p>
    <input type="text" name="flaps">
    <br><br>

    <p>Number of swivel flaps:</p>
    <input type="text" name="swivelFlaps">
    <br><br>

    <p>Color:</p>
    <select name="color">
        <option value="white">White</option>
        <option value="silver">Silver</option>
        <option value="beige">Beige</option>
        <option value="azure">Azure</option>
        <option value="ivory">Ivory</option>
    </select>
    <br><br>

    <p>Window sill:</p>
    <input type="checkbox" name="windowSill" value="yes">Yes
    <br><br>

    <p>Your email:</p>
    <input type="email" name="email">
    <br><br>

    <p>Your name:</p>
    <input type="text" name="name">
    <br><br>

    <input type="submit" value="Purchase" class="btn btn-success">
</form>