<main>
    <h1>Post Categories</h1>
    <?php if (!empty($postCategories)): ?>
        <ul>
            <?php foreach ($postCategories as $category): ?>
                <li>
                    <strong><?php echo $category['name']; ?></strong>
                    <p><?php echo $category['description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No post categories available.</p>
    <?php endif; ?>
</main>
