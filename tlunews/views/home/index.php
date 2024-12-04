<?php foreach ($news as $item): ?>
    <div>
        <h2><?= $item['title'] ?></h2>
        <p><?= $item['content'] ?></p>
        <small>Category: <?= $item['category_name'] ?></small>
    </div>
<?php endforeach; ?>
