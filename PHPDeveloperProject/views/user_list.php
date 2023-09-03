<!-- user_list.php front-end -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>User List</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Back to Home</a></li>
        </ul>
    </nav>
    <main>
        <!-- User list foreach -->
        <section>
            <h2>List of Users</h2>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li>
                        <?php echo "<b>" . htmlspecialchars($user['name']) . "</b>";?>
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
