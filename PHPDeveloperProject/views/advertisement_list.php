<!-- advertisement_list.php front-end -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Advertisement List</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Back to Home</a></li>
        </ul>
    </nav>
    <main>
        <!-- Ad list foreach -->
        <section>
            <h2>List of Advertisements</h2>
            <ul>
                <?php foreach ($advertisements as $ad): ?>
                    <li>
                        <?php echo "<b>" . $ad['name'] . "</b>" . ": " . $ad['title']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Ad Listing App</p>
    </footer>
</body>
</html>
