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
<h1>Update your details</h1>

<form method="post">
    <p>First name:</p>
    <input type="text" name="firstName">
    <br><br>

    <p>Last name:</p>
    <input type="text" name="lastName">
    <br><br>

    <p>Middle name:</p>
    <input type="text" name="middleName">
    <br><br>

    <p>Birth date (YYYY-MM-DD):</p>
    <input type="text" name="birthDate">
    <br><br>

    <p>City:</p>
    <select type="text" name="city">
        <option value="0">- Choose yor city -</option>
        <option value="1">New York</option>
        <option value="2">Los Angeles</option>
        <option value="3">Boston</option>
        <option value="4">Washington</option>
        <option value="5">San Francisco</option>
    </select>
    <br><br>

    <p>Position:</p>
    <input type="text" name="position">
    <br><br>

    <input type="submit">
</form>