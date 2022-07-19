<h2>éducation</h2>
<table>
    <?php
    foreach (educations() as $education) {
        ?>
        <tr class="experience">
            <td>
                <strong><?php echo htmlspecialchars($education["grade"]) ?></strong><br>
                <?php echo htmlspecialchars($education["period"]) ?>
            </td>
            <td><?php echo htmlspecialchars($education["message"]) ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
