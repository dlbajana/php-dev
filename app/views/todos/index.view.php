<?php require __DIR__ . '/../partials/head.php' ?>

    <ul>
        <?php foreach ($todos as $key => $todo): ?>
            <li><?= $todo->description ?></li>
        <?php endforeach; ?>
    </ul>

<?php require __DIR__ . '/../partials/footer.php' ?>
