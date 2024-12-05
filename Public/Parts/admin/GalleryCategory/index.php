<main>
    <h1>Gallery Categories</h1>
    <?php if (!empty($categories)): ?>
        <ul>
            <?php foreach ($categories as $category): ?>
                <li>
                    <strong><?php echo $category['name']; ?></strong>
                    <p><?php echo $category['description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No gallery categories available.</p>
    <?php endif; ?>
</main>
