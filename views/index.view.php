<?php require_once 'partitions/header.php'?>
<?php require_once 'partitions/nav.php'?>
<h1>
    <?= "Hello, {$_GET['name']}"; ?>
</h1>


<?php foreach ($tasks as $task): ?>

    <ul>
        <li><?= $task->getId() ?></php></li>
        <li><?= $task->getDescription() ?></li>
        <li><?= $task->isComplete()?'completed':'not completed' ?></li>
    </ul>

<?php endforeach; ?>

<hr>

<ul>
<?php foreach ($users as $user): ?>
    <li><?= $user->id . ' => ' . $user->name ?></php></li>
<?php endforeach; ?>
</ul>


<form method="post" action="/test/index.php/name">
    <input type="text" name="name">
    <button type="submit">submit</button>
</form>

<?php require_once 'partitions/footer.php'?>