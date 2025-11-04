<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
</head>

<body>
    <?php
    // check if user query parameter exists
    if (isset($_GET['user'])) {
        $user = htmlspecialchars($_GET['user']);
        echo "<h2>this is the profile of $user</h2>";
    } else {
        echo "<p>No user found</p>";
    }
    ?>
    <p><a href="index.php">back to the homepage</a></p>
</body>

</html> user