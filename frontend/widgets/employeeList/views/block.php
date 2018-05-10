<table class="table table-hover table-bordered">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Position</th>
        <th>Start</th>
    </tr>
<?php foreach ($list as $item): ?>
        <tr><td><?= $count++ ?></td><td><?= $item['first_name'] . ' ' . $item['last_name'] ?></td><td><?= $item['position'] ?></td><td><?= $item['start_date'] ?></td></tr>
<?php endforeach; ?>
    </table>
