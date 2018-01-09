<!doctype html>
<html>
<head> 
    <?php require "partials/bs.php"; ?>
    <link rel="stylesheet" type="text/css" href="/public/css/cart.css">
    <title>Prototype</title>
</head>
<body>
    <?php require 'partials/nav.php'; ?>
    <header>
        <h1>Cart</h1>
    </header>
    <br />
    <div style="text-align:center;">
        <strong><?php echo "Total: $" . $_SESSION['cart_total']; ?></strong>
    </div>
    <center>
    <?php foreach($frames as $frame): ?>
        <img src="\public\assets\frame_pictures\<?= $frame->frame_id; ?>.jpg" alt="<?= $frame->model; ?>" height="180" width="300">
        <br />
        <strong>
        <?php echo $frame->make . " "; ?>
        <?php echo $frame->model; ?>
        </strong>
        <br />
        <?php echo "Color: " . $frame->color; ?>
        <br />
        <?php echo "Gender: " . $frame->gender; ?>
        <br />
        <?php echo "Price: " . $frame->retail_price; ?>
        <br /><br />
    <?php endforeach; ?>
    </center> 
</body>
</html>