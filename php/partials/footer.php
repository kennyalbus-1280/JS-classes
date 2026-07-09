<?php
/**
 * Footer Partial
 * Include this file at the end of your HTML pages
 */
?>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> <?php echo APP_NAME; ?>. Learning modern JavaScript.</p>
    </footer>

    <?php if (isset($customScripts)): ?>
        <?php foreach ($customScripts as $script): ?>
            <script src="<?php echo htmlspecialchars($script); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <script src="/assets/js/script.js"></script>
</body>
</html>
