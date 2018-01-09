<!doctype html>
<html>
<head> 
    <?php require "partials/bs.php"; ?>
    <link rel="stylesheet" type="text/css" href="/public/css/index.css">
    <title>Prototype</title>
</head>
<body>
    <?php require 'partials/nav.php'; ?>
    <div class="container container-fluid">
        <div class="jumbotron">
            <h1 class="display-3 text-center">Capstone Project</h1>
        </div>
    </div>
    <div class="container container-fluid">
        <a class="text-center" href="http://github.com/BakerAO/Capstone" target="_blank">My Github</a>
        <br />
        <a class="text-center" href="/public/assets/FrameStore.pdf" target="_blank">Slide Show</a>
        <br />
        User_Frame = <?= $_SESSION['user_frame']; ?><br />
        User_Cart = 
            <?php foreach($_SESSION['user_cart'] as $cart) : ?>
                <?= $cart; ?> 
            <?php endforeach; ?>
            <br />
        Cart_Total = <?= $_SESSION['cart_total']; ?>
        <br />
    </div>
    <div style="text-align:center;">
        <form method='POST' action='/'>
            <button type="submit" name="btn_clearSession" value="clear">Clear Session</button>
        </form>
    </div>
</body>
</html>