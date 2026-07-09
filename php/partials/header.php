<?php
/**
 * Header Partial
 * Include this file at the beginning of your HTML pages
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - ' . APP_NAME : APP_NAME; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <?php if (isset($customStyles)): ?>
        <?php foreach ($customStyles as $style): ?>
            <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <header>
        <nav class="navbar">
            <h1><?php echo APP_NAME; ?></h1>
            <ul class="nav-links">
                <li><a href="index.html#basics">Basics</a></li>
                <li><a href="index.html#inheritance">Inheritance</a></li>
                <li><a href="index.html#examples">Examples</a></li>
            </ul>
        </nav>
    </header>

    <main>
