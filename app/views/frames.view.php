<!doctype html>
<html>
<head> 
    <title>Prototype</title>
    <link rel="stylesheet" type="text/css" href="/public/css/frames.css">
</head>
<body>
    <?php require 'partials/nav.php'; ?>
    <header>
        <h1>Frames</h1>
    </header>
    <br />
    <div style="text-align:center;">
        <form method='POST' action='/frames'>
            <button type="submit">Next Frame</button>
        </form>
    </div>
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
</body>
</html>