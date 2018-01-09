<!doctype html>
<html>
<head> 
    <?php require "partials/bs.php"; ?>
    <link rel="stylesheet" type="text/css" href="/public/css/users.css">
    <title>Users</title>
</head>
<body>
    <?php require 'partials/nav.php'; ?>
    <header>
        <h1>All Users</h1>
    </header>
    <h2>Submit Your Name</h2>
    <form method="POST" action="/users">
        <input name="user_name"></input>
        <button type="submit">Submit</button>
    </form>
    <br />
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->user_name; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>