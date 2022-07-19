<h2>Contacts</h2>
<?php
foreach (contacts() as $contact) {
    ?>
    <div class="contact">
        <div>
            <img src="<?php echo htmlspecialchars($contact["images"]); ?>"
                 alt="<?php echo htmlspecialchars($contact["alt"]); ?>">
            <a href="<?php echo htmlspecialchars($contact["data"]); ?>"
               target="<?php echo htmlspecialchars($contact["target"]); ?>">
                <?php echo htmlspecialchars($contact["text"]); ?></a>
        </div>
    </div>
    <?php
}
?>
