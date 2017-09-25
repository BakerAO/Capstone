<!doctype html>
<html>
<head> 
    <title>Prototype</title>
    <style> 
        header{
            background:#e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style> 
</head>
<body>
    <?php require 'partials/nav.php'; ?>
    <header>
        <h1>Prototype</h1>
    </header>
    <?php   $person = [
                'Name'=>"Baker",
                'Age'=>27,
                'Job'=>"IT"
            ];
            $person['Career']="Web Developer";
            unset($person['Job']);

            $task = [
                'title' => 'Finish homework',
                'due' => 'Today',
                'assigned_to' => 'Baker',
                'completed' => true
            ];
    ?>
    <ul> 
        <?php foreach ($person as $key=>$val) : ?> 
            <li><strong><?php echo $key; ?>: </strong><?php echo $val ?></li>
        <?php endforeach; ?>
    </ul>
    
    <header>
        <h1>Task of the Day<h1>
    </header>
    <ul>
        <li>
            <strong>Title: </strong> <?php echo $task['title']; ?> 
        </li>
        <li>
            <strong>Due: </strong> <?php echo $task['due']; ?> 
        </li>
        <li>
            <strong>Assign To: </strong> <?php echo $task['assigned_to']; ?> 
        </li>
        <li>
            <strong>Status: </strong> <?php echo $task['completed'] ? '&#9989' : 'Incomplete'; ?> 
        </li>
    </ul>
</body>
</html> 
