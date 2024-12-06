<main>
    <h1>Posts</h1>
    <?php if (!empty($posts)): ?>
        <ul>
            <?php foreach ($posts as $post): ?>
                <li>
                    <h2><?= $post['title']; ?></h2>
                    <p><?= $post['content']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No posts available.</p>
    <?php endif; ?>
</main>
