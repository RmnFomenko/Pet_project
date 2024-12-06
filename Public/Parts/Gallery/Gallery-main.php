<main>
    <h1>Gallery</h1>
    <?php if (!empty($images)): ?>
        <div class="gallery">
            <?php foreach ($images as $image): ?>
                <div>
                    <img src="/images/<?= $image['image']; ?>" alt="<?= $image['description']; ?>">
                    <p><?= $image['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No images available.</p>
    <?php endif; ?>
</main>
