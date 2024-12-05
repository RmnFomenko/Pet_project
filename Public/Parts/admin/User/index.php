<main>
    <h1>Users</h1>
    <?php if (!empty($users)): ?>
        <ul>
            <?php foreach ($users as $user): ?>
                <li>ID: <?= $user['id']; ?> | Name: <?= $user['name']; ?> | Email: <?= $user['email']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>
</main>
