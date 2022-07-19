<div class="h2-center">
    <h2>Livre d'or</h2>
</div>
<div class="livre-dor-details">
    <table class="livre-dor">
        <tr class="space">
            <td>
                <strong>Demandes</strong>
            </td>
            <td>
                <strong>Messages</strong>
            </td>
        </tr>
        <?php
        foreach (livredor() as $livre_dor) {
            ?>
            <tr class="space">
                <td>
                    <?php echo htmlspecialchars($livre_dor["demandes"]) ?>
                </td>
                <td>
                    <?php echo htmlspecialchars($livre_dor["messages"]) ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>