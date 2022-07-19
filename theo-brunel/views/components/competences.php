<div>
    <h2>Compétences</h2>
    <?php
    foreach (competences() as $competence) {
        ?>
        <div class="competences">
            <div>
                <div><?php echo htmlspecialchars($competence["skills"]); ?></div>
                <div class="slider">
                    <div style="width: <?php echo htmlspecialchars($competence["level"]); ?>%"></div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <h2>Logiciels</h2>
    <?php
    foreach (logiciels() as $logiciel) {
        ?>
        <div class="competences">
            <div>
                <div><?php echo htmlspecialchars($logiciel["firmware"]); ?></div>
                <div class="slider">
                    <div style="width: <?php echo htmlspecialchars($logiciel["level"]) ?>%"></div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
