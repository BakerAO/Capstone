<!doctype html>
<html>
<head> 
    <?php require "partials/bs.php"; ?>
    <link rel="stylesheet" type="text/css" href="/public/css/frames.css">
    <title>Prototype</title>
</head>
<body>
    <?php require 'partials/nav.php'; ?>
    <header>
        <h1>Frames</h1>
    </header>
    <br />
    <div style="text-align:center;">
        <form method='POST' action='/frames'>
            <input type="submit" name="btn_submit" value="Previous Frame">
            <div class="dropdown">
                <button class="dropbtn" name="btn_submit" value="DoNothing">Brand</button>
                <div class="dropdown-content">
                    <input type="submit" name="btn_submit" value="Burberry">
                    <input type="submit" name="btn_submit" value="Oakley">
                    <input type="submit" name="btn_submit" value="Ray-Ban">
                </div>
            </div>
            <input type="submit" name="btn_submit" value="Next Frame">
        </form>
        <br />
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
    </div>
</body>
</html>