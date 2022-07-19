<h2>Expériences</h2>
<table>
    <?php
    foreach (experiences() as $experience) {
        ?>
        <tr class="experience">
            <td>
                <strong><?php echo htmlspecialchars($experience["jobtitle"]) ?></strong><br>
                <?php echo htmlspecialchars($experience["period"]) ?>
            </td>
            <td>
                <strong><?php echo htmlspecialchars($experience["company"]) ?></strong><br>
                <?php echo htmlspecialchars($experience["message"]) ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>