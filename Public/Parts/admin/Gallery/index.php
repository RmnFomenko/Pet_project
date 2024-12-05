<main>
    <h1>Gallery</h1>
    <?php if (!empty($galleries)): ?>
        <ul>
            <?php foreach ($galleries as $gallery): ?>
                <li>
                    <img src="<?php echo $gallery['image']; ?>" alt="Gallery Image">
                    <p><?php echo $gallery['description']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No images available.</p>
    <?php endif; ?>
</main>
