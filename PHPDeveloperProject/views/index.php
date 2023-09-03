<!-- index.php front-end -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Listing App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to the Ad Listing App</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=user_list">User List</a></li>
            <li><a href="index.php?page=advertisement_list">Advertisement List</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>About the page:</h2>
            <p>What you see is a simple web application designed to show the current users from users database table and their currently available advertisements.</p>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Ad Listing App</p>
    </footer>
</body>
</html>
