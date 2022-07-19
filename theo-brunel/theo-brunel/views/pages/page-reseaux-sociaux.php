<div class="h2-center">
    <h2>
        Réseaux sociaux
    </h2>
</div>
<div class="reseaux-sociaux-details">
    <div class="contact">
        <?php
        foreach (reseaux() as $reseaux) {
            ?>
            <div>
                <img src="<?php echo htmlspecialchars($reseaux["images"]); ?>"
                     alt="<?php echo htmlspecialchars($reseaux["alt"]); ?>">
                <?php echo htmlspecialchars($reseaux["text"]) ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>